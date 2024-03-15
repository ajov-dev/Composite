<?php

namespace Tests\Feature;

use App\Services\Account;
use Tests\TestCase;

class CreditCardTest extends TestCase
{
    public function test_get_total_days_with_interest_account()
    {
        $account = new Account(1000, 0.99, '20-01-2024');

        $this->assertEquals(55, $account->get_total_days_with_interest_account());

    }
    public function test_get_total_interest()
    {
        $account = new Account(1000, 0.99, '20-01-2024');

        $this->assertEquals(1.49, $account->get_total_interest());
    }

}
