<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Concerns;

use Illuminate\Support\Collection;

use function Laravel\Prompts\clear;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\error;
use function Laravel\Prompts\info;
use function Laravel\Prompts\intro;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\note;
use function Laravel\Prompts\outro;
use function Laravel\Prompts\progress;
use function Laravel\Prompts\select;
use function Laravel\Prompts\spin;
use function Laravel\Prompts\table;
use function Laravel\Prompts\text;
use function Laravel\Prompts\warning;

use Pixielity\Support\Reflection;
use Pixielity\Support\Str;

/**
 * Interacts With Prompts Trait.
 *
 * Provides convenient access to Laravel Prompts functions with fallback to
 * plain output for non-interactive mode. This trait overrides Laravel Command
 * methods to use Laravel Prompts instead of Symfony's default prompts.
 *
 * Key features:
 * - Automatic fallback to plain output in non-interactive mode
 * - Consistent API across all commands
 * - Compatible signatures with Laravel Command
 * - Type-safe method signatures
 *
 * ## Note:
 * This file is excluded from AddVoidReturnTypeWhereNoReturnRector in rector.php
 * to maintain compatibility with Laravel Command parent class signatures.
 *
 * Example usage:
 * ```php
 * use Pixielity\Foundation\Console\Commands\BaseCommand;
 * use Pixielity\Foundation\Console\Concerns\InteractsWithPrompts;
 *
 * class MyCommand extends BaseCommand
 * {
 *     use InteractsWithPrompts;
 *
 *     public function handle(): int
 *     {
 *         $this->intro('My Command');
 *         $this->info('Processing...');
 *         $this->newLine();
 *         $this->outro('Done!');
 *         return self::SUCCESS;
 *     }
 * }
 * ```
 */
trait InteractsWithPrompts
{
    /**
     * Write a string as information output.
     *
     * @param  int|string|null  $verbosity
     *
     * @rector-ignore Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector
     */
    public function info(string $string, $verbosity = null): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->line($string, 'info', $verbosity);

            return;
        }

        info($string);
    }

    /**
     * Write a string as comment output.
     *
     * @param  int|string|null  $verbosity
     *
     * @rector-ignore Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector
     */
    public function comment(string $string, $verbosity = null): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->line($string, 'comment', $verbosity);

            return;
        }

        note($string);
    }

    /**
     * Write a string as error output.
     *
     * @param  int|string|null  $verbosity
     *
     * @rector-ignore Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector
     */
    public function error(string $string, $verbosity = null): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->line($string, 'error', $verbosity);

            return;
        }

        error($string);
    }

    /**
     * Write a blank line.
     *
     * @return $this
     */
    public function newLine(int $count = 1)
    {
        $this->output->write(Str::repeat("\n", $count));

        return $this;
    }

    /**
     * Prompt the user for input.
     *
     * @param  mixed  $question
     * @param  mixed  $default
     * @return mixed
     */
    public function ask(string $question, $default = null)
    {
        if ($this->isNonInteractive()) {
            return $default;
        }

        return text(
            label: $question,
            default: $default ?? '',
            required: false
        );
    }

    /**
     * Confirm a question with the user.
     *
     * @param  mixed  $question
     * @param  mixed  $default
     * @return bool
     */
    public function confirm(string $question, bool $default = false)
    {
        if ($this->isNonInteractive()) {
            return $default;
        }

        return confirm(
            label: $question,
            default: $default
        );
    }

    /**
     * Format input to textual table.
     *
     * @param  mixed  $headers
     * @param  mixed  $rows
     * @param  mixed  $tableStyle
     */
    public function table(array|Collection $headers, array|Collection|null $rows = null, $tableStyle = 'default', $columnStyles = []): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            // Fall back to parent implementation
            parent::table($headers, $rows, $tableStyle, $columnStyles);

            return;
        }

        table($headers, $rows);
    }

    /**
     * Check if running in non-interactive mode.
     *
     * @return bool True if non-interactive mode is enabled
     */
    protected function isNonInteractive(): bool
    {
        // Check if input is available and has no-interaction option
        if (Reflection::methodExists($this, 'option') && $this->hasOption('no-interaction')) {
            return (bool) $this->option('no-interaction');
        }

        // Fallback: check if we're in a CI environment
        return ! (in_array(getenv('CI'), ['', '0'], true) || getenv('CI') === [] || getenv('CI') === false) || ! (in_array(getenv('CONTINUOUS_INTEGRATION'), ['', '0'], true) || getenv('CONTINUOUS_INTEGRATION') === [] || getenv('CONTINUOUS_INTEGRATION') === false);
    }

    /**
     * Display an intro message.
     *
     * Uses Laravel Prompts to display a formatted intro/header.
     *
     * @param  string  $message  Message to display
     */
    protected function intro(string $message): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->output->writeln($message);

            return;
        }

        intro($message);
    }

    /**
     * Display an outro message.
     *
     * Uses Laravel Prompts to display a formatted outro/footer.
     *
     * @param  string  $message  Message to display
     */
    protected function outro(string $message): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->output->writeln($message);

            return;
        }

        outro($message);
    }

    /**
     * Display a note message.
     *
     * Uses Laravel Prompts to display a formatted note.
     *
     * @param  string  $message  Message to display
     */
    protected function note(string $message): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->output->writeln($message);

            return;
        }

        note($message);
    }

    /**
     * Display a warning message.
     *
     * Uses Laravel Prompts to display a formatted warning message.
     *
     * @param  string  $message  Message to display
     */
    protected function warning(string $message): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            $this->output->writeln($message);

            return;
        }

        warning($message);
    }

    /**
     * Prompt user to select from a list of options.
     *
     * Uses Laravel Prompts to display an interactive selection menu.
     *
     * @param  string  $question  Question to ask
     * @param  array<int|string, string>  $options  Available options
     * @param  int|string|null  $default  Default option key
     * @return int|string Selected option key
     */
    protected function select(string $question, array $options, int|string|null $default = null): int|string
    {
        return select(
            label: $question,
            options: $options,
            default: $default
        );
    }

    /**
     * Prompt user to select multiple options from a list.
     *
     * Uses Laravel Prompts to display an interactive multi-selection menu.
     *
     * @param  string  $question  Question to ask
     * @param  array<int|string, string>  $options  Available options
     * @param  array<int, int|string>  $default  Default selected option keys
     * @return array<int, int|string> Selected option keys
     */
    protected function multiselect(string $question, array $options, array $default = []): array
    {
        return multiselect(
            label: $question,
            options: $options,
            default: $default
        );
    }

    /**
     * Display a progress bar and execute callback.
     *
     * Uses Laravel Prompts to display a progress bar while executing a callback.
     *
     * @param  iterable<mixed>  $steps  Items to iterate over
     * @param  callable  $callback  Callback to execute for each step
     * @param  string  $label  Progress bar label
     * @return array<int, mixed> Results from callback execution
     */
    protected function withProgress(iterable $steps, callable $callback, string $label = 'Processing...'): array
    {
        return progress(
            label: $label,
            steps: $steps,
            callback: $callback
        );
    }

    /**
     * Display a spinner while executing a callback.
     *
     * Uses Laravel Prompts to display a spinner animation while executing a callback.
     *
     * @param  callable  $callback  Callback to execute
     * @param  string  $message  Message to display
     * @return mixed Result from callback execution
     */
    protected function spin(callable $callback, string $message = 'Loading...'): mixed
    {
        return spin(
            callback: $callback,
            message: $message
        );
    }

    /**
     * Clear the terminal screen.
     *
     * Uses Laravel Prompts to clear the terminal screen.
     * Only works in interactive mode.
     */
    protected function clear(): void
    {
        if ($this->isNonInteractive() || ! $this->output->isDecorated()) {
            return;
        }

        clear();
    }
}
