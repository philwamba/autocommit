# AutoCommit

**AutoCommit** is a Laravel package that automatically suggests clear and concise commit messages using AI. It reads your staged changes and recommends a conventional commit message, making your workflow faster and more efficient.

## Features

- Automatically generates commit messages based on your staged changes.
- Uses AI to ensure that your commit messages follow conventional standards.
- Simple to install and use within your Laravel projects.

## Installation

1. Add AutoCommit to your Laravel project via Composer:

    ```bash
    composer require philwamba/autocommit
    ```

2. If you haven’t already, add your OpenAI API key to your `.env` file:

    ```env
    OPENAI_API_KEY=your-openai-api-key
    ```

## Usage

To use AutoCommit, simply run the following Artisan command:

```bash
php artisan git:suggest-commit
```

## Configuration

AutoCommit requires an OpenAI API key, which should be stored in your `.env` file. The package will automatically use this key to generate commit message suggestions.

## Contributing

If you have any ideas or find any issues, feel free to contribute by submitting a pull request or opening an issue on GitHub.

## License

This package is open-source and licensed under the MIT License.
