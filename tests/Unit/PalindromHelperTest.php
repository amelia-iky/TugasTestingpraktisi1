<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\PalindromHelper;

class PalindromHelperTest extends TestCase
{
    public function test_palindrom_true()
    {
        $this->assertTrue(PalindromHelper::isPalindrom("katak"));
        $this->assertTrue(PalindromHelper::isPalindrom("kasur rusak"));
    }

    public function test_palindrom_false()
    {
        $this->assertFalse(PalindromHelper::isPalindrom("mobil"));
        $this->assertFalse(PalindromHelper::isPalindrom("halo dunia"));
    }
}
