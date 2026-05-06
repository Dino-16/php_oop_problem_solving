/*
Problem 4: The Secure Data Auditor
Scenario: You are building a system for a bank. For security reasons, every time a sensitive record is accessed, you
must log the entry time, and every time the record is closed, you must log the exit time for auditing purposes.

Task: Create a DocumentAudit class.

The Constructor:
Accepts the name of the document (e.g., "Annual_Report.pdf").
Prints: "AUDIT START: Accessing [Document Name] at [Current Time]."

The Destructor:
Prints: "AUDIT END: Closing [Document Name] and clearing temporary cache."
Challenge: Instantiate two different document objects and see how the destructors fire in reverse order at the end of
the script.
*/

<?php

class DocumentAudit
{
    private $documentName;

    public function __construct($filename)
    {
        $this->documentName = $filename;
        echo "AUDIT START: Accessing {$this->documentName} at " . date("H:i:s") . "\n";
    }

    public function __destruct()
    {
        echo "AUDIT END: Closing {$this->documentName} and clearing temporary cache.\n";
    }
}
$doc1 = new DocumentAudit("Annual_Report.pdf");
$doc2 = new DocumentAudit("Financial_Statement.pdf");