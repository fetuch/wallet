<?php

namespace App\Services;

use App\Models\Asset;
use App\Models\Resource;

class RegisterTransactionService
{
    private $user;

    /**
     * WalletService constructor.
     *
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function buy($type, $asset, $payment)
    {
        switch ($type)
        {
            case 'fiat':
                $this->buyFiat($asset['currency']['id'], $asset['quantity'], $payment['currency']['id'], $payment['quantity']);
                break;

            default:
                //
        }
    }

    private function buyFiat($fiatId, $fiatQuantity, $currencyId, $currencyQuantity)
    {
        $currency = Resource::findOrFail($currencyId);
        $fiat = Resource::findOrFail($fiatId);
        $priceInPLN = $currencyQuantity * $currency->valuations()->latest()->first()->amount;

        if ($asset = $this->user->getAssetByName($fiat->name))
        {
            $asset->update([
                'quantity' => $asset->quantity + $fiatQuantity,
                'unit_price' => ($asset->quantity * $asset->unit_price + $priceInPLN) / ($asset->quantity + $fiatQuantity)
            ]);
        } else {
            $asset = Asset::create([
                'name' => $fiat->name,
                'user_id' => $this->user->id,
                'resource_id' => $fiat->id,
                'quantity' => $fiatQuantity,
                'unit_price' => $priceInPLN / $fiatQuantity,
            ]);
        }

        if ($userCurrency= $this->user->currencies()->where('resource_id', $currency['id'])->first())
        {
            $userCurrency->update([
                'quantity' => $userCurrency->quantity - $currencyQuantity,
                'unit_price' => (abs($userCurrency->quantity) * $userCurrency->unit_price + $priceInPLN) / (abs($userCurrency->quantity) + $currencyQuantity)
            ]);
        } else {
            Asset::create([
                'name' => $currency->name,
                'user_id' => $this->user->id,
                'resource_id' => $currency->id,
                'quantity' => - $currencyQuantity,
                'unit_price' => $priceInPLN / $currencyQuantity,
            ]);
        }

        activity('investments')
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have bought ' . $fiatQuantity . ' ' . $asset->name . ' for ' . $currencyQuantity . ' ' . $currency->name);
    }
}
