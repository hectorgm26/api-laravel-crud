# File Tree: api-crud-laravel

Generated on: 29/8/2025, 20:15:22
Root path: `c:\laragon\www\api-crud-laravel`

```
├── 📁 app/
│   ├── 📁 Http/
│   │   ├── 📁 Controllers/
│   │   │   ├── 📁 Api/
│   │   │   │   ├── 🐘 AuthController.php
│   │   │   │   ├── 🐘 CategoryController.php
│   │   │   │   ├── 🐘 PermissionController.php
│   │   │   │   ├── 🐘 PostController.php
│   │   │   │   ├── 🐘 RoleController.php
│   │   │   │   ├── 🐘 TaskController.php
│   │   │   │   └── 🐘 UserController.php
│   │   │   └── 🐘 Controller.php
│   │   ├── 📁 Requests/
│   │   │   ├── 🐘 StoreTaskRequest.php
│   │   │   └── 🐘 UpdateTaskRequest.php
│   │   └── 📁 Resources/
│   │       ├── 🐘 CategoryResource.php
│   │       ├── 🐘 PermissionResource.php
│   │       ├── 🐘 PostResource.php
│   │       ├── 🐘 RoleResource.php
│   │       ├── 🐘 TagResource.php
│   │       ├── 🐘 TaskResource.php
│   │       └── 🐘 UserResource.php
│   ├── 📁 Models/
│   │   ├── 📁 Scopes/
│   │   │   ├── 🐘 FilterScope.php
│   │   │   ├── 🐘 IncludeScope.php
│   │   │   ├── 🐘 SelectScope.php
│   │   │   └── 🐘 SortScope.php
│   │   ├── 🐘 Api.php
│   │   ├── 🐘 Category.php
│   │   ├── 🐘 Post.php
│   │   ├── 🐘 Tag.php
│   │   ├── 🐘 Task.php
│   │   └── 🐘 User.php
│   ├── 📁 Policies/
│   │   └── 🐘 PostPolicy.php
│   └── 📁 Providers/
│       └── 🐘 AppServiceProvider.php
├── 📁 bootstrap/
│   ├── 📁 cache/ 🚫 (auto-hidden)
│   ├── 🐘 app.php
│   └── 🐘 providers.php
├── 📁 config/
│   ├── 🐘 app.php
│   ├── 🐘 auth.php
│   ├── 🐘 cache.php
│   ├── 🐘 database.php
│   ├── 🐘 filesystems.php
│   ├── 🐘 jwt.php
│   ├── 🐘 logging.php
│   ├── 🐘 mail.php
│   ├── 🐘 permission.php
│   ├── 🐘 queue.php
│   ├── 🐘 sanctum.php
│   ├── 🐘 services.php
│   └── 🐘 session.php
├── 📁 database/
│   ├── 📁 factories/
│   │   ├── 🐘 CategoryFactory.php
│   │   ├── 🐘 PostFactory.php
│   │   ├── 🐘 TagFactory.php
│   │   ├── 🐘 TaskFactory.php
│   │   └── 🐘 UserFactory.php
│   ├── 📁 migrations/
│   │   ├── 🐘 0001_01_01_000000_create_users_table.php
│   │   ├── 🐘 0001_01_01_000001_create_cache_table.php
│   │   ├── 🐘 0001_01_01_000002_create_jobs_table.php
│   │   ├── 🐘 2025_08_19_014616_create_personal_access_tokens_table.php
│   │   ├── 🐘 2025_08_23_011806_create_tasks_table.php
│   │   ├── 🐘 2025_08_26_030412_create_categories_table.php
│   │   ├── 🐘 2025_08_26_030435_create_posts_table.php
│   │   ├── 🐘 2025_08_26_030452_create_tags_table.php
│   │   ├── 🐘 2025_08_26_030532_create_post_tag_table.php
│   │   └── 🐘 2025_08_29_203654_create_permission_tables.php
│   ├── 📁 seeders/
│   │   ├── 🐘 DatabaseSeeder.php
│   │   ├── 🐘 PermissionSeeder.php
│   │   └── 🐘 RoleSeeder.php
│   └── 🚫 .gitignore
├── 📁 node_modules/ 🚫 (auto-hidden)
├── 📁 public/
│   ├── 📁 build/ 🚫 (auto-hidden)
│   ├── 📄 .htaccess
│   ├── 🖼️ favicon.ico
│   ├── 🐘 index.php
│   ├── 📄 robots.txt
│   └── 📄 storage 🚫 (auto-hidden)
├── 📁 resources/
│   ├── 📁 css/
│   │   └── 🎨 app.css
│   ├── 📁 js/
│   │   ├── 📄 app.js
│   │   └── 📄 bootstrap.js
│   └── 📁 views/
│       └── 🐘 welcome.blade.php
├── 📁 routes/
│   ├── 🐘 api.php
│   ├── 🐘 console.php
│   └── 🐘 web.php
├── 📁 storage/
│   ├── 📁 app/
│   │   ├── 📁 private/
│   │   │   ├── 📁 images/
│   │   │   │   └── 🖼️ R6HrCnCoA87g7n31I0QQUkkumcPFbqcOfKdFAppd.jpg
│   │   │   └── 🚫 .gitignore
│   │   ├── 📁 public/
│   │   │   ├── 📁 images/
│   │   │   │   ├── 🖼️ 9b3KPPBfAeAoFaiL7mYJgkzaZwmLJhvsgyNWT4ZB.jpg
│   │   │   │   ├── 🖼️ QBhRxLGMUEsXmav1xH78B8SKNg9ER24J9zJPMAYg.jpg
│   │   │   │   ├── 🖼️ TRKSU6LLTFhdjrAkf6Oik7jJsYAumFEMM7hrbkSv.jpg
│   │   │   │   ├── 🖼️ gvxcV2X8FBIYTsiWkMksI1MhBptcrRrrSnFWrlVh.jpg
│   │   │   │   ├── 🖼️ jtDWZtm7zcxoTpXpXKq62zD61uBdUI9VGlTMZOXx.jpg
│   │   │   │   ├── 🖼️ pDvPVCXKMCcxDvT0FoidrKxoVvl0YnVBR4cKdHLc.jpg
│   │   │   │   └── 🖼️ y6pMlfr58uGKypl5zcQLsdqmME3DNVkXsyRWuqqW.jpg
│   │   │   └── 🚫 .gitignore
│   │   └── 🚫 .gitignore
│   ├── 📁 framework/
│   │   ├── 📁 cache/ 🚫 (auto-hidden)
│   │   ├── 📁 sessions/
│   │   │   └── 🚫 .gitignore
│   │   ├── 📁 testing/
│   │   │   └── 🚫 .gitignore
│   │   ├── 📁 views/
│   │   │   └── 🚫 .gitignore
│   │   └── 🚫 .gitignore
│   └── 📁 logs/
│       ├── 🚫 .gitignore
│       └── 📋 laravel.log 🚫 (auto-hidden)
├── 📁 tests/
│   ├── 📁 Feature/
│   │   └── 🐘 ExampleTest.php
│   ├── 📁 Unit/
│   │   └── 🐘 ExampleTest.php
│   └── 🐘 TestCase.php
├── 📁 vendor/ 🚫 (auto-hidden)
├── 📄 .editorconfig
├── 🔒 .env 🚫 (auto-hidden)
├── 📄 .env.example
├── 📄 .gitattributes
├── 🚫 .gitignore
├── 📖 README.md
├── 📄 artisan
├── 📄 composer.json
├── 🔒 composer.lock 🚫 (auto-hidden)
├── 📄 package-lock.json
├── 📄 package.json
├── 📄 phpunit.xml
└── 📄 vite.config.js
```

---
*Generated by FileTree Pro Extension*