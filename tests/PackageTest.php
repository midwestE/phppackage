<?php

use PhpPackageNamespace\PhpPackageClass;
use PHPUnit\Framework\TestCase;

class PhpPackageTest extends TestCase
{

    private function jsonData()
    {
        return file_get_contents(__DIR__ . '/phppackagename.json');
    }

    private function phpPackageName()
    {
        return new PhpPackageClass($this->jsonData());
    }

    public function testCreation()
    {
        $instance = $this->phpPackageName();
        $this->assertInstanceOf(PhpPackageClass::class, $instance);
    }

    public function testJsonSerialize()
    {
        $instance = $this->phpPackageName();
        $json = $instance->getJson();
        $this->assertNotEmpty($json);
        $object = json_decode($json);
        $this->assertIsObject($object);
    }
}
