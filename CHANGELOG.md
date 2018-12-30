CHANGELOG
=========

### master

- Fix multiple filter declarations into Renderer Twig extension
- Fix disable state with button link filter
- Improve unit tests

### 2.0.0 (2018-12-21)

- Improve functional tests
- Update Bootstrap 3 (3.3.7 > 3.4.0)
- Update Wiki
- Add Bootstrap 4 layout
- Refactoring Bootstrap 3 layout
- Add Bootstrap 4 asset
- Fix handler for icon rendering into Twig extensions
- Add default user info theme provider
- Add default tasks drop down theme provider
- Add default search theme provider
- Add default notifications drop down theme provider
- Add default navigation theme provider
- Add default hook drop down theme provider
- Add default footer theme provider
- Add default breadcrumbs theme provider
- Add default application theme provider
- Add CHANGELOG
- Update dependencies (Core bundle 1.2.0 and SyntaxHighlighter 2.2.0)
- Reorganize layout templates
- Remove jQuery (moved into Core bundle)
- Remove email template (moved into Core bundle)
- Remove waitMe (moved into Core bundle)
- Remove SweetAlert (moved into Core bundle)
- Remove Meteocons (moved into Core bundle)
- Remove Material Design Iconic Font (moved into Core bundle)
- Remove Material Design Hierarchical Display (moved into Core bundle)
- Remove Material Design Color Palette (moved into Core bundle)
- Remove jQuery Select2 (moved into Core bundle)
- Remove jQuery Inputmask (moved into Core bundle)
- Remove jQuery EasyAutocomplete (moved into Core bundle)
- Remove Font Awesome (moved into Core bundle)
- Remove Animate.css (moved into Core bundle)
- Zip public resources into assets folder
- Add Role label Twig extension trait (used for dependency injection into another service)
- Add Table button Twig extension trait (used for dependency injection into another service)
- Add Form button Twig extension trait (used for dependency injection into another service)
- Add Progress bar Twig extension trait (used for dependency injection into another service)
- Add Nav Twig extension trait (used for dependency injection into another service)
- Add Label Twig extension trait (used for dependency injection into another service)
- Add Glyphicon Twig extension trait (used for dependency injection into another service)
- Add Dropdown Twig extension trait (used for dependency injection into another service)
- Add Button groug Twig extension trait (used for dependency injection into another service)
- Add Breadcrumb Twig extension trait (used for dependency injection into another service)
- Add Badge Twig extension trait (used for dependency injection into another service)
- Add Alert Twig extension trait (used for dependency injection into another service)
- Add Typography Twig extension trait (used for dependency injection into another service)
- Add Image Twig extension trait (used for dependency injection into another service)
- Add Grid Twig extension trait (used for dependency injection into another service)
- Add Code Twig extension trait (used for dependency injection into another service)
- Add Button Twig extension trait (used for dependency injection into another service)
- Update Role label Twig extension
- Update Table button Twig extension
- Update Form button Twig extension
- Update Progress bar Twig extension
- Update Nav Twig extension
- Update Label Twig extension
- Update Glyphicon Twig extension
- Update Dropdown Twig extension
- Update Button groug Twig extension
- Update Breadcrumb Twig extension
- Update Badge Twig extension
- Update Alert Twig extension
- Update Typography Twig extension
- Update Image Twig extension
- Update Grid Twig extension
- Update Code Twig extension
- Update Button Twig extension
- Remove unused code
- Improve unit tests
- Add Navigation node "users groups" (with Glyphicon icon)
- Add Navigation node "users" (with Glyphicon icon)
- Add Navigation node "settings" (with Glyphicon icon)
- Add Navigation node "parameters" (with Glyphicon icon)
- Add Navigation node "events" (with Glyphicon icon)
- Add Navigation node "dashboard" (with Glyphicon icon)
- Add Navigation node action "new users group" (with Glyphicon icon)
- Add Navigation node action "new user" (with Glyphicon icon)
- Add Navigation node action "new" (with Glyphicon icon)
- Add Navigation node action "index" (with Glyphicon icon)
- Add Navigation node action "import" (with Glyphicon icon)
- Add Navigation node action "export" (with Glyphicon icon)
- Add Navigation node action "edit" (with Glyphicon icon)
- Add Breadcrumb node action "new users group" (with Glyphicon icon)
- Add Breadcrumb node action "new user" (with Glyphicon icon)
- Add Breadcrumb node action "new" (with Glyphicon icon)
- Add Breadcrumb node action "index" (with Glyphicon icon)
- Add Breadcrumb node action "import" (with Glyphicon icon)
- Add Breadcrumb node action "export" (with Glyphicon icon)
- Add Breadcrumb node action "edit" (with Glyphicon icon)
- Remove Meteocons Twig extension (moved into core-bundle)
- Remove Material Design Iconic Font Twig extension (moved into core-bundle)
- Remove jQuery InputMask Twig extension (moved into core-bundle)
- Remove Font Awesome Twig extension (moved into core-bundle)
- Remove Navigation interface (moved into core-bundle)
- Remove Breadcrumb node (moved into core-bundle)
- Remove Navigation item (moved into core-bundle)
- Remove Navigation node (moved into core-bundle)
- Remove Navigation tree (moved into core-bundle)
- Remove Navigation tree helper (moved into core-bundle)
- Remove Wiki page (moved into core-bundle)
- Remove Email layout (moved into core-bundle)
- Remove Provider interface (moved into core-bundle)
- Remove Theme provider interface (moved into core-bundle)
- Remove Application theme provider interface (moved into core-bundle)
- Remove Breadcrumbs theme provider interface (moved into core-bundle)
- Remove Footer theme provider interface (moved into core-bundle)
- Remove Hook drop down theme provider interface (moved into core-bundle)
- Remove Navigation theme provider interface (moved into core-bundle)
- Remove Notifications drop down theme provider interface (moved into core-bundle)
- Remove Search theme provider interface (moved into core-bundle)
- Remove Tasks drop down theme provider interface (moved into core-bundle)
- Remove User info theme provider interface (moved into core-bundle)
- Remove Select2 data format interface (moved into core-bundle)
- Remove Form helper (moved into core-bundle)
- Remove Select2 helper (moved into core-bundle)
- Remove User helper (moved into core-bundle)
- Remove Theme manager interface (moved into core-bundle)
- Remove abstract manager (moved into core-bundle)
- Remove abstract Theme manager (moved into core-bundle)
- Remove Theme manager (moved into core-bundle)
- Remove Form factory (moved into core-bundle)
- Remove Translated choice renderer interface (moved into core-bundle)
- Remove Choice renderer interface (moved into core-bundle)
- Remove Form renderer (moved into core-bundle)
- Remove Kernel event listener (moved into core-bundle)
- Remove Bad user role exception (moved into core-bundle)
- Remove Bad user role exception (moved into core-bundle)
- Remove Notification event (moved into core-bundle)
- Remove Notification events (moved into core-bundle)
- Remove "final" keyword
- Add hasProviders() into abstract manager

### 1.7.3 (2018-10-04)

- Add parent() call into Twig templates
- Improve PHPDoc

### 1.7.2 (2018-10-01)

- Fix Layout controller functional tests
- Replace some string delimiters

### 1.7.1 (2018-10-01)

- Update unit testing configuration
- Clean up dependencies

### 1.7.0 (2018-09-28)

- Add Theme manager
- Update Font Awesome public resource
- Add jQuery EasyAutocomplete public resource
- Replace static:: by self:: call to avoid possible issues into child classes
- Improve unit tests
- Add Manager interface
- Reorganize the wiki pages
- Improve code quality

### 1.6.3 (2018-09-22)

- Restore icon into Navigation tree helper

### 1.6.2 (2018-08-30)

- Update dependencies (Core library 4.2.0)

### 1.6.1 (2018-08-22)

- Update dependencies (Core library 4.0.0)

### 1.6.0 (2018-08-17)

- Update exception constructors
- Add Select2 helper (use to provide "results" array)
- Move Wiki layout model

### 1.5.3 (2018-08-16)

- Update exceptions inheritance
- Update Nav Twig extension
- Improve PHPDoc

### 1.5.2 (2018-08-09)

- Remobe "bundle" into service names

### 1.5.1 (2018-08-07)

- Update dependencies (Core library 3.0.0)
- Update wiki layout template

### 1.5.0 (2018-08-02)

- Rename Table button Twig extension functions
- Improve PHPDoc
- Rename Form button Twig extension functions

### 1.4.0 (2018-07-31)

- Set services as public (Symfony ^4.0 compatibility)
- Refactoring jQuery Inputmask Twig extension
- Refactoring Material Design Iconic font Twig extension
- Refactoring Button group Twig extension
- Refactoring Progress bar Twig extension
- Refactoring Label Twig extension
- Refactoring Glyphicon Twig extension
- Refactoring Breadcrumb Twig extension
- Refactoring Badge Twig extension
- Refactoring Alert Twig extension
- Improve PHPDoc
- Add Button Twig extension
- Refactoring Grid Twig extensions
- Refactoring Code Twig extensions
- Add Typography Twig extension
- Replace StringUtility by bootstrapHTMLElement() into Twig extensions
- Add Dropdown Twig extension

### 1.3.1 (2018-07-16)

- Remove unused code
- Fix possible issue into abstract Component Twig extension

### 1.3.0 (2018-07-16)

- Add Breadcrumb Twig extension
- Refactor getUser() method into Kernel event listener
- Add $matcher into Navigation node classes constructor
- Prepare Nav Twig extension
- Add Button group Twig extension

### 1.2.0 (2018-07-14)

- Add regexp support and activeTree() into NavigationTree

### 1.1.1 (2018-07-12)

- Fix possible issue into NavigationTree

### 1.1.0 (2018-07-11)

- Improve unit tests
- Improve code indent
- Add activeNodes() into NavigationTree
- Move Table button Twig extension
- Move Form button Twig extension

### 1.0.0 (2018-07-10)

- Initial release
