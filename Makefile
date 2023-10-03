.PHONY: ci
ci: lint test

.PHONY: test
test:
	vendor/bin/phpunit

.PHONY: lint
lint:
	vendor/bin/phpcs
	vendor/bin/php-cs-fixer fix --dry-run

.PHONY: fix
fix:
	vendor/bin/phpcbf
	vendor/bin/php-cs-fixer fix
