# LensShare — MVP v1

LensShare is a lightweight social platform centered around communities, conversation, and shared interests. Users can discover themed Portals, join text and video chat Rooms, share posts, and explore the platform through a unified Explore Hub.

This repository contains the first public milestone of LensShare, establishing the foundation for a richer social experience with authentication, user profiles, personalized feeds, and real-time communication.


## 🚀 Features (MVP v1)

- **Rooms** — Interest-based spaces with text and optional video chat
- **Portals** — Work, Sports, Education, Entertainment, Health, Relationships, Technology
- **Holodeck** — Create or join private Rooms by typing a name
- **Explore Hub** — Cross-platform search (Messages, Rooms, Posts, People) + Explore mode
- **Posts System** — Global and room-specific posts
- **Cloud Database Foundation** — PostgreSQL-powered backend ready for user accounts and future social features
- **Authentication Ready** — Project structure prepared for user accounts and profiles
- **Accessibility**
    - Focus ring
    - Keyboard navigation
    - Alt text across illustrations
- **Error Pages**
    - Custom 404.php
    - Static 500.html
- **SEO**
    - sitemap.xml
    - robots.txt
    - `noindex,follow` on room.php
- **WebSocket Chat** with live incoming/outgoing rendering
- **Cross-room message focusing** with `?focus=<id>` param


## 📦 Tech Stack

- **PHP 8+**
- **SQLite 3 (current)**
- **PostgreSQL (Neon, migration in progress)**
- **Bootstrap 5**
- **JavaScript (vanilla + WebSocket client)**
- **Apache + .htaccess routing**
- **Python scripts** (for room seed generation)


## 🗂 Directory Overview

```bash
/
├── room.php                 # Main chat room view
├── explore.php               # Search + Explore hub
├── work.php, sports.php…    # Portal pages
├── ___config.php            # Project configuration
├── includes/                # Shared PHP helpers (DB, auth, etc.)
├── database/                # PostgreSQL schema and migrations
├── admin/                   # Admin tools (post editor, db browser, etc.)
├── comms/                   # Chat backend + WebSocket glue
├── data/                    # SQLite database(s)
├── tools/                   # Fresh DB init + room_seed builder scripts
├── css/                     # styles.css and custom.css
├── js/                      # chat.js and other frontend scripts
└── assets/                  # images, gifs, icons
```


## 🛠 Setup

1. Clone the repository.
2. Run `composer install`.
3. Create a `.env` file from `.env.example`.
4. Configure your `DATABASE_URL`.
5. Ensure PHP and PostgreSQL are available.
6. Run the initial database schema (coming soon).
7. Start your local web server.

## 🗄 Database

LensShare is currently transitioning from SQLite to PostgreSQL.

Development uses a cloud-hosted PostgreSQL database provided by Neon. Database configuration is supplied through environment variables, with the primary connection defined by:

DATABASE_URL=...

Database schemas and future migrations are stored in the `database/` directory.


## ⚙️ Development Notes

- Messages are rendered both server-side (initial load) and via WebSocket
- Outgoing and incoming messages have matching HTML markup
- Fresh DB script seeds:
    - **Main Room**
    - All Portal Rooms
    - 2 global posts
- Room search indexing is limited to message bodies + user names
- `room.php` is intentionally `noindex,follow` due to dynamic content


## 🛣 Roadmap

- [x] MVP Rooms and Portals
- [x] Explore Hub
- [x] WebSocket Chat
- [x] Cloud PostgreSQL foundation
- [ ] Authentication
- [ ] User Profiles
- [ ] Photo & Video Posts
- [ ] Following System
- [ ] Personalized Feed
- [ ] Zoom-like Spaces
- [ ] Direct Messages


## 📜 License

This project is licensed under the MIT License. See the LICENSE file for details.


## 🏷 Version

v1.0.0-mvp