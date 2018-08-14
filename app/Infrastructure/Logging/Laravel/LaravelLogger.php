<?php namespace App\Infrastructure\Logging\Laravel;

use App\Infrastructure\Logging\Logger;
use Illuminate\Support\Facades\Log;

final class LaravelLogger implements Logger
{
    /**
     * Request unique session Id
     *
     * @return mixed
     */
    private function getSessionId()
    {
        return session()->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function emergency($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::info($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function alert($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::alert($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function critical($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::critical($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function error($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::error($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function warning($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::warning($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function notice($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::notice($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function info($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::info($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::debug($this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
        $trace = debug_backtrace();
        Log::log($level, $this->getSessionId() . ' | ' . $trace[1]['class'] . '::' . $trace[1]['function'] . ' | ' . $message, $context);
    }
}