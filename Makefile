CHECK_PATH ?= ./app

all: help

help:
	@echo "Help information, please run specific target:"; \
	echo '----------------------------------------------'; \

phpstan:	## Check code with phpstan on the 9 level. Use for new files (CHECK_PATH=path make phpstan)
	@php vendor/bin/phpstan analyse -l 9 --debug --memory-limit=1G --configuration phpstan.neon ${CHECK_PATH}

phpcs:		##
	@php vendor/bin/phpcs --encoding=utf-8 --no-cache --report=code --colors --report-width=80 --standard=PSR12 --ignore= -s ${CHECK_PATH}

phpcbf:		##
	@php vendor/bin/phpcbf -p ${CHECK_PATH}