<?php

return [
  'providers' => [
    0  => 'Illuminate\\Auth\\AuthServiceProvider',
    1  => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    2  => 'Illuminate\\Bus\\BusServiceProvider',
    3  => 'Illuminate\\Cache\\CacheServiceProvider',
    4  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    5  => 'Illuminate\\Cookie\\CookieServiceProvider',
    6  => 'Illuminate\\Database\\DatabaseServiceProvider',
    7  => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    8  => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    9  => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    10 => 'Illuminate\\Hashing\\HashServiceProvider',
    11 => 'Illuminate\\Mail\\MailServiceProvider',
    12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    15 => 'Illuminate\\Queue\\QueueServiceProvider',
    16 => 'Illuminate\\Redis\\RedisServiceProvider',
    17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    18 => 'Illuminate\\Session\\SessionServiceProvider',
    19 => 'Illuminate\\Translation\\TranslationServiceProvider',
    20 => 'Illuminate\\Validation\\ValidationServiceProvider',
    21 => 'Illuminate\\View\\ViewServiceProvider',
    22 => 'Arcanedev\\LogViewer\\LogViewerServiceProvider',
    23 => 'Barryvdh\\DomPDF\\ServiceProvider',
    24 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    25 => 'Chumper\\Zipper\\ZipperServiceProvider',
    26 => 'Darryldecode\\Cart\\CartServiceProvider',

    27 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    28 => 'Laravel\\Tinker\\TinkerServiceProvider',
    29 => 'Collective\\Html\\HtmlServiceProvider',
    30 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    31 => 'RachidLaasri\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
    32 => 'ShvetsGroup\\LaravelEmailDatabaseLog\\LaravelEmailDatabaseLogServiceProvider',
    33 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
    34 => 'Thomaswelton\\LaravelGravatar\\LaravelGravatarServiceProvider',
    35 => 'Yajra\\DataTables\\ButtonsServiceProvider',
    36 => 'Yajra\\DataTables\\FractalServiceProvider',
    37 => 'Yajra\\DataTables\\HtmlServiceProvider',
    38 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    39 => 'Bugsnag\\BugsnagLaravel\\BugsnagServiceProvider',
    40 => 'Arcanedev\\LogViewer\\LogViewerServiceProvider',
    41 => 'Laravel\\Tinker\\TinkerServiceProvider',
    42 => 'App\\Providers\\AppServiceProvider',
    43 => 'App\\Providers\\AuthServiceProvider',
    44 => 'App\\Providers\\EventServiceProvider',
    45 => 'App\\Providers\\RouteServiceProvider',
    46 => 'Collective\\Html\\HtmlServiceProvider',
    47 => 'Barryvdh\\DomPDF\\ServiceProvider',
    48 => 'Yajra\\DataTables\\HtmlServiceProvider',
    49 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    50 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    51 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Cookie\\CookieServiceProvider',
    2 => 'Illuminate\\Database\\DatabaseServiceProvider',
    3 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    4 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Notifications\\NotificationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',

    10 => 'Arcanedev\\LogViewer\\LogViewerServiceProvider',
    11 => 'Barryvdh\\DomPDF\\ServiceProvider',
    12 => 'Chumper\\Zipper\\ZipperServiceProvider',
    13 => 'Darryldecode\\Cart\\CartServiceProvider',

    14 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    15 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    16 => 'RachidLaasri\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
    17 => 'ShvetsGroup\\LaravelEmailDatabaseLog\\LaravelEmailDatabaseLogServiceProvider',
    18 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
    19 => 'Thomaswelton\\LaravelGravatar\\LaravelGravatarServiceProvider',
    20 => 'Yajra\\DataTables\\ButtonsServiceProvider',
    21 => 'Yajra\\DataTables\\FractalServiceProvider',
    22 => 'Yajra\\DataTables\\HtmlServiceProvider',
    23 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    24 => 'Bugsnag\\BugsnagLaravel\\BugsnagServiceProvider',
    25 => 'Arcanedev\\LogViewer\\LogViewerServiceProvider',
    26 => 'App\\Providers\\AppServiceProvider',
    27 => 'App\\Providers\\AuthServiceProvider',
    28 => 'App\\Providers\\EventServiceProvider',
    29 => 'App\\Providers\\RouteServiceProvider',
    30 => 'Barryvdh\\DomPDF\\ServiceProvider',
    31 => 'Yajra\\DataTables\\HtmlServiceProvider',
    32 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    33 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
    34 => 'Spatie\\Activitylog\\ActivitylogServiceProvider',
  ),
  'deferred' => 
  array (
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.clear-compiled' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.resets.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.down' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.fresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.install' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.status' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.package.discover' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.preset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.listen' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.restart' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.work' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',

    'Illuminate\\Console\\Scheduling\\ScheduleFinishCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand'    => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.storage.link'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.up'                                             => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.cache'                                     => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear'                                     => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.app.name'                                       => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.make'                                      => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.table'                                    => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.channel.make'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.console.make'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.controller.make'                                => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.generate'                                 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.make'                                     => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.exception.make'                                 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.factory.make'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.job.make'                                       => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.listener.make'                                  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.mail.make'                                      => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.middleware.make'                                => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.make'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.model.make'                                     => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.notification.make'                              => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.notification.table'                             => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.observer.make'                                  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.policy.make'                                    => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.provider.make'                                  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed-table'                             => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.table'                                    => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.request.make'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.resource.make'                                  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.rule.make'                                      => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seeder.make'                                    => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.session.table'                                  => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.serve'                                          => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.test.make'                                      => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.vendor.publish'                                 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator'                                               => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository'                                   => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator'                                      => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer'                                               => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'hash'                                                   => 'Illuminate\\Hashing\\HashServiceProvider',
    'hash.driver'                                            => 'Illuminate\\Hashing\\HashServiceProvider',
    'mailer'                                                 => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.mailer'                                           => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.transport'                                        => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Mail\\Markdown'                             => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub'                   => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue'                                                  => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker'                                           => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener'                                         => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer'                                           => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection'                                       => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis'                                                  => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection'                                       => 'Illuminate\\Redis\\RedisServiceProvider',
    'auth.password'                                          => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker'                                   => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'translator'                                             => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader'                                     => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator'                                              => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence'                                    => 'Illuminate\\Validation\\ValidationServiceProvider',
    'command.ide-helper.generate'                            => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'command.ide-helper.models'                              => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
    'command.tinker'                                         => 'Laravel\\Tinker\\TinkerServiceProvider',
    'html'                                                   => 'Collective\\Html\\HtmlServiceProvider',
    'form'                                                   => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder'                          => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder'                          => 'Collective\\Html\\HtmlServiceProvider',
  ],
  'when' => [
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => [
    ],
    'Illuminate\\Bus\\BusServiceProvider' => [
    ],
    'Illuminate\\Cache\\CacheServiceProvider' => [
    ],
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => [
    ],
    'Illuminate\\Hashing\\HashServiceProvider' => [
    ],
    'Illuminate\\Mail\\MailServiceProvider' => [
    ],
    'Illuminate\\Pipeline\\PipelineServiceProvider' => [
    ],
    'Illuminate\\Queue\\QueueServiceProvider' => [
    ],
    'Illuminate\\Redis\\RedisServiceProvider' => [
    ],
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => [
    ],
    'Illuminate\\Translation\\TranslationServiceProvider' => [
    ],
    'Illuminate\\Validation\\ValidationServiceProvider' => [
    ],
    'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider' => [
    ],
    'Laravel\\Tinker\\TinkerServiceProvider' => [
    ],
    'Collective\\Html\\HtmlServiceProvider' => [
    ],
  ],
];
