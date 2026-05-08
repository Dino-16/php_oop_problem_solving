<?php
/*
Problem 6: The Database Transaction "Rollback"
Scenario: In database management, if you start a "Transaction" and the script fails or ends before you "Commit" the
changes, you should automatically roll back to prevent data corruption.

Task: Create a DatabaseTransaction class.

Property: $isCommitted (Boolean, default false).
The Constructor:
Prints: "BEGIN TRANSACTION: Locking database tables..."
Method commit():
Sets $isCommitted to true.
Prints: "SUCCESS: Changes saved to disk."
The Destructor:
Logic: Check if $isCommitted is still false.
If false, print: "WARNING: Transaction not committed! Rolling back changes to keep data safe."
If true, print: "Transaction completed successfully. Releasing locks."
*/

class DatabaseTransaction
{
    public $isCommitted = false;

    public function __construct()
    {
        echo "BEGIN TRANSACTION: Locking database tables...";
    }

    public function commit()
    {
        $this->isCommitted = true;
        echo "SUCCESS: Changes saved to disk.";
    }

    public function __destruct()
    {
        if ($this->isCommitted === true) {
            echo "Transaction completed successfully. Releasing locks.";
        } else {
            echo "WARNING: Transaction not committed! Rolling back changes to keep data safe.";
        }
    }
}

// Example 1: Not committed
$tx1 = new DatabaseTransaction();

// Example 2: Committed
$tx2 = new DatabaseTransaction();
$tx2->commit();