<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class SearchTest extends TestCase
{
    public function testEmptySearchString(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            [],
            $instance->search('')
        );
    }

    public function testSimpleSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['My Little Pony'],
            $instance->search('Little')
        );
    }

    public function testSimpleMultipleSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['Rocky 1', 'Rocky 2'],
            $instance->search('ock')
        );
    }

    public function testSimpleInsensitiveCaseSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['My Little Pony'],
            $instance->search('pon')
        );
    }

    public function testSimpleMatchAllInsensitiveCaseSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['Rocky 1', 'Rocky 2', 'My Little Pony'],
            $instance->search('O')
        );
    }

    public function testComplexInsensitiveCaseSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['My Little Pony'],
            $instance->search('li ny')
        );
    }

    public function testFailingComplexInsensitiveCaseSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            [],
            $instance->search('ny li')
        );
    }

    public function testMatchAllSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            ['Rocky 1', 'Rocky 2', 'My Little Pony'],
            $instance->search('o Y')
        );
    }

    public function testBlankSpacesSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            [],
            $instance->search('    ')
        );
    }

    public function testWeirdCharactersSearch(): void
    {
        $instance = Search::getInstance();
        $this->assertEquals(
            [],
            $instance->search('$')
        );
        $this->assertEquals(
            [],
            $instance->search('/')
        );
        $this->assertEquals(
            [],
            $instance->search('.')
        );
        $this->assertEquals(
            [],
            $instance->search('.*')
        );
        $this->assertEquals(
            [],
            $instance->search('\\')
        );
        $this->assertEquals(
            ['\w'],
            $instance->search('\w')
        );
    }
}