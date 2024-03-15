<?php

namespace App\Services;

class Account
{
    protected $balance;

    protected $interest_rate;

    protected $deposit_date;

    public function __construct(float $balance = 0.00, float $interest_rate = 0.00, ?string $deposit_date = null)
    {
        $this->balance = $balance;
        $this->interest_rate = $interest_rate;
        $this->deposit_date = $deposit_date;
    }

    public function get_total_interest(): float
    {
        return round($this->balance * $this->interest_rate/100 * self::get_total_days_with_interest_account()/365, 2);
    }
    public function get_total_days_with_interest_account(): int
    {
        $deposit_date = new \DateTime($this->deposit_date);
        $current_date = new \DateTime(date('d-m-Y'));
        // $interval = $this->deposit_date->diff($current_date);

        return $deposit_date->diff($current_date)->days;
    }

    public function get_days_for_current_month(): int
    {
        return cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
    }
}
