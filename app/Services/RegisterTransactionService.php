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
                $this->buyFiat($asset['currency'], $asset['quantity'], $payment['currency'], $payment['quantity']);
                break;

            default:
                //
        }
    }

    private function buyFiat($fiat, $fiatQuantity, $currency, $currencyQuantity)
    {
        if ($asset = $this->user->getAssetByName($fiat['name']))
        {
            $asset->update([
                'quantity' => $asset->quantity += $fiatQuantity,
                'unit_price' => $asset->quantity += $fiatQuantity
            ]);
        } else {
            $asset = Asset::create([
                'name' => $fiat['name'],
                'user_id' => $this->user->id,
                'resource_id' => $fiat['id'],
                'quantity' => $fiatQuantity,
                'unit_price' => $fiatQuantity,
            ]);
        }

        if ($userCurrency= $this->user->currencies()->where('resource_id', $currency['id'])->first())
        {
            $userCurrency->update([
                'quantity' => $userCurrency->quantity -= $currencyQuantity
            ]);
        } else {
            Asset::create([
                'name' => $currency['name'],
                'user_id' => $this->user->id,
                'resource_id' => $currency['id'],
                'quantity' => - $currencyQuantity,
            ]);
        }

        activity('investments')
            ->causedBy(auth()->user())
            ->performedOn($asset)
            ->log('You have bought ' . $fiatQuantity . ' ' . $asset->name . ' for ' . $currencyQuantity . ' ' . $currency['name']);
    }
}
