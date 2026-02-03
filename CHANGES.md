# Viewfinder Lite - Changes from Full Version

This document details all modifications made to create Viewfinder Lite from the full Viewfinder Assessment Tool.

## Created Files

### New Landing Page
- **`index.php`** - Simplified landing page with only 2 cards (Readiness Assessment & Quiz)

### Configuration
- **`includes/Config.php`** - Streamlined version without profile management code
- **`composer.json`** - Updated with Lite branding and simplified dependencies
- **`Dockerfile`** - Lite-specific Docker configuration
- **`README.md`** - Complete documentation for Viewfinder Lite
- **`CHANGES.md`** - This file

## Modified Files

### DS Qualifier Rebranding (Readiness Assessment → Readiness Assessment)

**`ds-qualifier/index.php`**
- Line 6: Updated page title to "Digital Sovereignty Readiness Assessment"
- Lines 44-47: Updated navigation (removed "Full Assessment", added "Take Quiz")
- Line 57: Updated heading to "Digital Sovereignty Readiness Assessment"
- Line 58: Updated subtitle for general readiness assessment
- Lines 63-70: Updated description for broader audience (not sales-specific)

**`ds-qualifier/results.php`**
- Line 6: Updated page title
- Lines 47-51: Updated navigation (removed "Full Assessment", added "Take Quiz")
- Line 310: Removed reference to full Viewfinder assessment
- Line 392: Changed button from "Full Assessment" to "Take Quiz"
- Line 399: Updated footer text to "Readiness Assessment"
- Line 400: Removed footer link to full assessment

**`ds-qualifier/config.php`**
- Lines 3-6: Updated file header comments

### Quiz Navigation Updates

**`quiz/index.php`**
- Line 650: Added "Readiness Assessment" button to header navigation
- Line 660: Confirmed title is "Digital Sovereignty Quiz" (no change needed)

## Removed Files

### Profile Management
- `profile-admin.php`
- `profile-create.php`
- `profile-edit.php`
- `profile-delete.php`
- `profile-export.php`
- `profile-import.php`
- `profile-*-handler.php` (all AJAX handlers)
- `includes/ProfileAdmin.php`
- `includes/ProfileGenerator.php`
- `includes/ProfileEditor.php`
- `includes/ProfileDeleter.php`
- `includes/ProfileExporter.php`
- `includes/ProfileImporter.php`
- `includes/FileUpdater.php`
- `js/profile-*.js` (all profile JavaScript)
- `css/profile-*.css` (all profile CSS)

### Assessment System
- `results.php` (main assessment results page)
- `controls-Security.json`
- `controls-AI.json`
- `controls-NIST.json`
- `controls-RHEL.json`
- `controls-DigitalSovereignty.json`
- `controls-Template.json`
- `compliance.json`
- `lob.json`
- `compliance/` (entire directory)
- `lob/` (entire directory)
- `report/` (if existed)

### Other Features
- `escape-room.php` (Operation Sovereign Shield)
- `tests/` (test suite)
- `phpunit.xml`
- `.phpunit.result.cache`

## Configuration Changes

### `includes/Config.php`
Removed:
- Lines 17-44: `PROFILES` constant (all profile definitions)
- Lines 37-44: `LOB_OPTIONS` constant
- Lines 49-94: Maturity level constants and control configuration
- Lines 119-207: All profile-related methods:
  - `getControlsPath()`
  - `getCompliancePath()`
  - `getLOBPath()`
  - `getLOBContentPath()`
  - `getComplianceContentPath()`
  - `getEnabledProfiles()`
  - `getProfileDisplayName()`
  - `isValidProfile()`
  - `isProfileEnabled()`
  - `getLOBOptions()`
  - `isValidLOB()`

Kept:
- `APP_NAME` (changed to 'Viewfinder Lite')
- `APP_VERSION` (changed to '1.0.0')
- `getBasePath()`
- Error handling configuration
- Security configuration

### `composer.json`
- Updated `name` to "redhat/viewfinder-lite"
- Updated `description` for Lite version
- Updated `version` to "1.0.0"
- Removed `require-dev` section
- Removed `autoload-dev` section
- Removed `scripts` section
- Removed `config` section

## Verification Results

- **Size**: 24 MB (vs ~100+ MB for full version)
- **File count**: 386 files
- **No broken references**: All "Readiness Assessment" and "profile=" references removed
- **Clean navigation**: All components link to Home, Quiz, and Readiness Assessment only
- **Dependencies installed**: Composer dependencies successfully installed
- **Permissions set**: Proper directory permissions for logs and quiz data

## Navigation Structure

```
Landing Page (index.php)
├── Digital Sovereignty Readiness Assessment
│   ├── ds-qualifier/index.php (assessment form)
│   └── ds-qualifier/results.php (results & recommendations)
│       ├── New Assessment (back to ds-qualifier/index.php)
│       └── Take Quiz (to quiz/)
│
└── Digital Sovereignty Quiz
    ├── quiz/index.php (quiz interface)
    └── quiz/certificate.php (certificate generation)
        └── Readiness Assessment (to ds-qualifier/)
```

## Testing Checklist

- [ ] Landing page loads and displays 2 cards
- [ ] Readiness Assessment flow (start → complete → results)
- [ ] Quiz flow (start → complete → certificate)
- [ ] Cross-navigation between Quiz and Readiness Assessment
- [ ] No 404 errors or broken links
- [ ] All references to "Readiness Assessment" updated to "Readiness Assessment"
- [ ] Docker build succeeds
- [ ] Docker container runs and serves application

## Version Information

- **Viewfinder Lite Version**: 1.0.0
- **Based on**: Viewfinder Assessment Tool 2.0.0+
- **Date Created**: 2026-02-03
