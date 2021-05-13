<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('investments.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Investments', route('investments.index'));
});

Breadcrumbs::for('investments.assets.index', function ($trail) {
    $trail->parent('investments.index');
    $trail->push('Assets', route('investments.assets.index'));
});

Breadcrumbs::for('investments.transactions.index', function ($trail) {
    $trail->parent('investments.index');
    $trail->push('Transactions', route('investments.transactions.index'));
});

Breadcrumbs::for('investments.transactions.create', function ($trail) {
    $trail->parent('investments.transactions.index');
    $trail->push('Create', route('investments.transactions.create'));
});
