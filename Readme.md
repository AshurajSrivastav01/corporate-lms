# Corporate Learning Hub (CLH)

A modern **Corporate Learning Management System (LMS)** demo built with **Moodle 5.2.2**, customized for a professional workforce-learning experience.

> **Portfolio Project:** Demonstrates Moodle LMS customization, corporate training architecture, responsive UI/UX, navigation, learning content structure, and custom PHP-based public pages.

## 🌐 Project Overview

**Corporate Learning Hub** is a generic corporate LMS designed to demonstrate how organizations can provide structured online learning for employees.

The platform is organized around:

- Employee onboarding
- Compliance & safety
- Professional development
- Technical training
- Leadership & management
- Continuous learning

The project combines Moodle's native LMS functionality with the **New Learning (LmsStyle)** theme, **MB2 Builder**, custom HTML/CSS, and custom Moodle-integrated PHP pages.

## 🎯 Project Goals

- Build a professional corporate LMS experience
- Customize Moodle's frontend and theme
- Separate public website content from LMS functionality
- Create realistic corporate training categories and workflows
- Provide a responsive learner experience
- Demonstrate reusable UI components and custom frontend work
- Demonstrate clean root-level PHP public pages integrated with Moodle
- Produce a portfolio-ready Moodle implementation

## 🧩 Technology Stack

| Technology | Purpose |
|---|---|
| Moodle 5.2.2 | Core Learning Management System |
| PHP | Moodle customization and custom public pages |
| MySQL/MariaDB | Database |
| HTML5 | Page structure and custom content |
| CSS3 | Responsive UI and styling |
| JavaScript | Interactive frontend components |
| New Learning / LmsStyle | Moodle theme |
| MB2 Builder | Page and layout builder |
| SVG | Lightweight interface icons |

## 🏗️ Platform Structure

### Public Website

- Homepage / landing page
- Training catalog
- Learning categories
- How It Works
- FAQ
- About Corporate Learning Hub
- Privacy Policy
- Terms and Conditions
- Get Started
- Login

### LMS Area

- Course enrollment/access
- Learning activities
- Course progress
- Activity completion
- Assessments
- Certificates/completion records
- Learner dashboard
- User profiles
- Training management

## 📚 Learning Categories

### 1. Employee Onboarding
Structured training for new employees, including workplace orientation, policies, procedures, and role-specific learning.

### 2. Compliance & Safety
Training related to workplace standards, safety practices, compliance requirements, ethics, and organizational policies.

### 3. Professional Development
Learning focused on communication, collaboration, productivity, professional skills, and career development.

### 4. Technical Training
Technology-focused training designed to develop practical digital and technical capabilities.

### 5. Leadership & Management
Training for managers, team leaders, and emerging leaders covering leadership, decision-making, and team development.

### 6. Continuous Learning
Ongoing professional and personal development designed to encourage continuous improvement.

## 🎓 Current Course

**Workplace Orientation & Onboarding**

- Short name: `ONBOARD-001`
- Category: Employee Onboarding

This course is the foundation for the broader corporate training catalog.

## 🖥️ Homepage

The homepage has been customized using the **New Learning Live Page Builder**.

Current sections:

1. Hero / platform introduction
2. Workforce learning introduction
3. Core LMS benefits
4. Six learning categories
5. How Corporate Learning Hub Works
6. Learning statistics
7. Frequently Asked Questions
8. Call-to-action section
9. Custom corporate footer

### Homepage highlights

- Responsive layouts
- Corporate visual language
- Custom SVG icons
- Hover animations
- Animated statistics
- Responsive cards
- Clear calls to action
- Custom footer navigation

## 🧭 Navigation

### Public Navigation

```text
Home
Training
Categories
  ├── Employee Onboarding
  ├── Compliance & Safety
  ├── Professional Development
  ├── Technical Training
  ├── Leadership & Management
  └── Continuous Learning
How It Works
FAQ
Login
```

### Logged-in Navigation

The logged-in experience is focused on learner workflows:

```text
Dashboard
My Learning
Training
Categories
Notifications
Messages
Search
User Profile
```

Moodle/New Learning handles the native user/profile utilities.

## 📄 Custom Public Pages

Selected public pages use clean root-level PHP routes while bootstrapping Moodle and retaining the Moodle theme.

```text
public_html/
│
├── config.php
├── index.php
│
├── about/
│   └── index.php
│
├── privacy-policy/
│   └── index.php
│
└── terms/
    └── index.php
```

Current clean routes:

```text
/
/about/
/privacy-policy/
/terms/
```

The same architecture can be extended for additional public pages such as `/faq/`, `/how-it-works/`, `/learning-categories/`, and `/get-started/`.

## 🎨 UI / UX Approach

The visual direction follows a clean corporate SaaS/LMS style.

### Design principles

- Professional corporate appearance
- Blue/navy visual identity
- High readability
- Consistent spacing
- Card-based content
- Responsive layouts
- Minimal navigation
- Clear calls to action
- Mobile-friendly presentation

Custom CSS is used where necessary to extend the Moodle theme and builder output.

## 🔐 Privacy & Terms

The project includes sample:

- Privacy Policy
- Terms and Conditions

These are demonstration pages. For a production deployment, policies should be reviewed and customized for the organization's actual data processing, cookies, hosting, retention, legal requirements, jurisdiction, and contact information.

## 🚀 Development Roadmap

### Phase 1 — Foundation ✅

- [x] Moodle installation
- [x] Corporate LMS site configuration
- [x] New Learning theme
- [x] Site branding
- [x] Six learning categories
- [x] Initial course
- [x] Public homepage
- [x] Public navigation
- [x] Logged-in navigation
- [x] Custom footer
- [x] FAQ page
- [x] About page
- [x] Privacy Policy
- [x] Terms and Conditions

### Phase 2 — Course Catalog 🔄

- [ ] Professional course catalog
- [ ] Course card presentation
- [ ] Course descriptions
- [ ] Course images
- [ ] Training metadata
- [ ] Search/filter experience
- [ ] Additional corporate courses
- [ ] Category-specific course content

### Phase 3 — Learning Experience

- [ ] Course section structure
- [ ] Lessons
- [ ] Videos
- [ ] Documents/resources
- [ ] Quizzes
- [ ] Assignments
- [ ] Activity completion
- [ ] Course completion rules
- [ ] Learning paths

### Phase 4 — Learner Experience

- [ ] Dashboard customization
- [ ] My Learning experience
- [ ] Progress indicators
- [ ] Course completion status
- [ ] Certificates
- [ ] Learner profile experience
- [ ] Personalized learning experience

### Phase 5 — Corporate LMS Features

- [ ] Manager/admin workflows
- [ ] Employee groups
- [ ] Learning reports
- [ ] Compliance tracking
- [ ] Required training
- [ ] Certification management
- [ ] Organizational reporting

### Phase 6 — Advanced Integration

- [ ] Moodle + Laravel integration
- [ ] Custom APIs
- [ ] External application integration
- [ ] Advanced reporting
- [ ] Custom LMS functionality
- [ ] Production deployment improvements

## 📂 Suggested Documentation Structure

```text
docs/
├── architecture/
├── moodle-configuration/
├── theme-customization/
├── page-builder/
├── custom-pages/
├── course-design/
├── integrations/
└── deployment/
```

## 🧪 Demo Environment

Corporate Learning Hub is maintained as a portfolio/demo LMS rather than a production corporate deployment.

The project demonstrates practical skills across:

- Moodle administration
- LMS architecture
- UI/UX customization
- PHP development
- Frontend development
- Corporate training design
- Learning workflows
- Moodle extensibility

## 🤝 Project Status

**Status:** Active Development 🚧

The core branding, homepage, navigation, footer, and initial public pages are complete.

### Next Major Milestone

**Course Catalog + Real Training Content**

This phase will expand the initial course into a realistic corporate training catalog and learner experience.

## 👨‍💻 Author

**CodeBridgeIT MVP Studio**

A portfolio-focused software development project demonstrating modern Moodle LMS customization and corporate learning solutions.

## ⚠️ Disclaimer

Corporate Learning Hub is a demonstration/portfolio project.

Sample training content, policies, statistics, user information, and organizational references should be treated as demonstration data unless explicitly configured otherwise.

For production deployments, security, privacy, accessibility, data protection, backups, hosting, and organizational requirements should be reviewed separately.
