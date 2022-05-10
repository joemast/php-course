<?php

declare(strict_types=1);

namespace Tests;

use Throwable;
use PHPCourse\Logger\LoggerInterface;
use PHPCourse\Trials\BinarySum;
use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    public function binarySumDataProvider(): array
    {
        return [
            'Successful scenario' => ['10', '01', '11'],
            'Args with leading/trailing spaces' => [' 111', '01 ', '1000'],
        ];
    }

    /**
     * @dataProvider binarySumDataProvider
     */
    public function testBinarySum(string $arg1, string $arg2, string $expected): void
    {
        $stubLogger = $this->createStub(LoggerInterface::class);
        $binSumObj = new BinarySum($stubLogger);

        $result = $binSumObj->binarySum($arg1, $arg2);
        $this->assertEquals($expected, $result);
    }

    public function nonBinaryArgumentsDataProvider(): array
    {
        return [
            ['013', '11'],
            ['10', '1d0'],
        ];
    }

    /**
     * @dataProvider nonBinaryArgumentsDataProvider
     */
    public function testNonBinaryArgumentsException(string $arg1, string $arg2): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/.+/');

        $stubLogger = $this->createStub(LoggerInterface::class);
        (new BinarySum($stubLogger))->binarySum($arg1, $arg2);
    }

    public function testLoggingOfSuccessfulResult(): void
    {
        $stubLogger = $this->createMock(LoggerInterface::class);

        $arg1 = '11';
        $arg2 = '11';
        $result = '110';

        $stubLogger->expects($this->once())
            ->method('info')
            ->with($this->stringContains("{$arg1} + {$arg2} = {$result}"));

        (new BinarySum($stubLogger))->binarySum($arg1, $arg2);
    }

    public function testLoggingOfFailureParamsValidation(): void
    {
        $stubLogger = $this->createMock(LoggerInterface::class);

        $arg1 = 'AA';
        $arg2 = '11';

        $stubLogger->expects($this->once())
            ->method('error')
            ->with($this->stringContains('binary'));

        try {
            (new BinarySum($stubLogger))->binarySum($arg1, $arg2);
        } catch (Throwable $e) {
        }
    }
}
