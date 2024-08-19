<?php

namespace Philwamba\AutoCommit\Console;

use Illuminate\Console\Command;
use OpenAI\Client;

class SuggestCommitMessage extends Command
{
    protected $signature = 'git:suggest-commit';
    protected $description = 'Suggest a conventional commit message based on Git changes';

    public function handle()
    {
        // Get the Git diff
        $diff = shell_exec('git diff --cached');

        if (empty($diff)) {
            $this->error('No staged changes found.');
            return 1;
        }

        // Initialize OpenAI client with the API key from config/services.php
        $client = new Client([
            'api_key' => config('services.openai.api_key')
        ]);

        // Generate commit message suggestion
        $response = $client->completions()->create([
            'model' => 'text-davinci-002',
            'prompt' => "Suggest a conventional commit message for the following Git diff:\n\n$diff",
            'max_tokens' => 60
        ]);

        $suggestedMessage = trim($response['choices'][0]['text']);

        $this->info("Suggested commit message:");
        $this->line($suggestedMessage);

        return 0;
    }
}
