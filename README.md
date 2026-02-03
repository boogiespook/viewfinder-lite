# Viewfinder Lite

A streamlined version of the Viewfinder Assessment Tool, containing only the Digital Sovereignty Quiz and Readiness Assessment components.

## What's Included

### 1. Digital Sovereignty Readiness Assessment
- Quick 10-15 minute assessment tool
- 21 questions across 7 key domains
- Yes/No/Don't Know response format
- Instant scoring and recommendations
- Questions to research feature for "Don't Know" responses

### 2. Digital Sovereignty Quiz
- Interactive knowledge quiz
- 7 critical domains
- Certificate generation upon completion
- Leaderboard with top scores
- Privacy-focused (opt-in data storage)

## Installation

### Local Installation

1. **Install dependencies:**
   ```bash
   cd /var/www/html/viewfinder-lite
   composer install --no-dev --optimize-autoloader
   ```

2. **Set permissions:**
   ```bash
   chmod 755 /var/www/html/viewfinder-lite
   chmod 775 /var/www/html/viewfinder-lite/logs
   chmod 775 /var/www/html/viewfinder-lite/quiz/data
   chown -R apache:apache /var/www/html/viewfinder-lite
   ```

3. **Configure web server to point to `/var/www/html/viewfinder-lite`**

### Docker Installation

1. **Build the image:**
   ```bash
   cd /var/www/html/viewfinder-lite
   docker build -t viewfinder-lite:1.0.0 .
   ```

2. **Run the container:**
   ```bash
   docker run -d -p 8080:8080 --name viewfinder-lite viewfinder-lite:1.0.0
   ```

3. **Access the application:**
   ```
   http://localhost:8080
   ```

## File Structure

```
viewfinder-lite/
├── index.php                    # Landing page with 2 tool cards
├── composer.json                # PHP dependencies
├── Dockerfile                   # Container build configuration
├── README.md                    # This file
│
├── ds-qualifier/                # Readiness Assessment component
│   ├── index.php               # Assessment questionnaire
│   ├── results.php             # Results and recommendations
│   ├── config.php              # Questions configuration
│   ├── css/
│   └── js/
│
├── quiz/                        # Digital Sovereignty Quiz
│   ├── index.php               # Quiz interface
│   ├── certificate.php         # Certificate generation
│   ├── questions.json          # Quiz questions
│   └── data/                   # Leaderboard data storage
│
├── includes/                    # Core backend classes
│   ├── Config.php              # Simplified configuration (Lite version)
│   ├── Security.php            # Security utilities
│   ├── Logger.php              # Logging functionality
│   └── Exceptions/             # Custom exception classes
│
├── css/                         # Shared stylesheets
├── js/                          # Shared JavaScript
├── images/                      # Images and logos
├── error-pages/                 # Error handling pages
└── logs/                        # Application logs
```

## Dependencies

### PHP Requirements
- PHP 8.1 or higher
- ext-json

### Composer Dependencies
- `endroid/qr-code` (^5.0) - QR code generation for certificates
- `monolog/monolog` (^3.5) - Logging framework

## Key Differences from Full Viewfinder

| Feature | Full Viewfinder | Viewfinder Lite |
|---------|----------------|-----------------|
| Profile Management | ✓ | ✗ |
| Full Assessments | ✓ | ✗ |
| Readiness Assessment | ✓ | ✓ |
| Digital Sovereignty Quiz | ✓ | ✓ |
| Escape Room | ✓ | ✗ |
| Control Frameworks | ✓ | ✗ |
| LOB Content | ✓ | ✗ |
| Size | ~100+ MB | ~70-75 MB |

## Usage

### Landing Page
Navigate to the root URL to access the landing page, which displays two cards:
1. **Digital Sovereignty Readiness Assessment** - Quick assessment tool
2. **Digital Sovereignty Quiz** - Interactive knowledge quiz

### Navigation Flow
- **Landing → Readiness Assessment → Results**
  - Complete assessment
  - View results and recommendations
  - Option to start new assessment or take quiz

- **Landing → Quiz → Certificate**
  - Take quiz
  - View results
  - Generate certificate
  - Optional: Add to leaderboard

### Cross-Navigation
Both tools include navigation buttons to:
- Return to landing page
- Switch between Readiness Assessment and Quiz

## Configuration

### Application Settings
Edit `includes/Config.php` to modify:
- `APP_NAME` - Application name
- `APP_VERSION` - Version number
- Error handling settings
- Security configuration

### Readiness Assessment Questions
Edit `ds-qualifier/config.php` to customize questions across 7 domains.

### Quiz Questions
Edit `quiz/questions.json` to modify quiz content.

## Security Features

- CSRF protection enabled
- Input validation and sanitization
- Secure file path handling
- Error logging without exposing sensitive data
- Session timeout (1 hour)
- Security headers in Docker configuration

## Support

For issues or questions, refer to the main Viewfinder project documentation.

## Version

Current version: **1.0.0**

## License

Apache-2.0 license - Red Hat
