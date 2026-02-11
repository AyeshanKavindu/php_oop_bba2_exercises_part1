<?php
/*
 * INSTRUCTIONS:
 * Create a class named BankAccount with the property balance.
 * Add a const CURRENCY
 * Add methods deposit($amount) to deposit money, and withdraw($amount)
 *  to withdraw money (if the balance is sufficient).
 * When displaying amount add the currency
 * Display a message each time an operation is performed (echo).
 * When it's working, create a child class SavingAccount 
 *  => we cannot withdraw more than 100
 */
class BankAccount
{
    private float $balance = 0.0;
    const CURRENCY = "USD";

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "Deposited: $" . number_format($amount, 2) . " " . self::CURRENCY . "<br>";
    }

    public function withdraw(float $amount): void
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrew: $" . number_format($amount, 2) . " " . self::CURRENCY . "<br>";
        } else {
            echo "Insufficient balance to withdraw $" . number_format($amount, 2) . " " . self::CURRENCY . "<br>";
        }
    }

    public function getBalance(): string
    {
        return "Current Balance: $" . number_format($this->balance, 2) . " " . self::CURRENCY;
    }
}

class SavingAccount extends BankAccount
{
    public function withdraw(float $amount): void
    {
        if ($amount > 100) {
            echo "You cannot withdraw more than 100 " . self::CURRENCY . " at once.<br>";
            return;
        }

        parent::withdraw($amount);
    }
}

$account = new BankAccount();
$account->deposit(500);
$account->withdraw(150);
echo $account->getBalance() . "<br>";
$savingAccount = new SavingAccount();
$savingAccount->deposit(300);
$savingAccount->withdraw(150);
echo $savingAccount->getBalance() . "<br>";

?>