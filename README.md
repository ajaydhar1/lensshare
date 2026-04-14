# LensShare — MVP v1

LensShare is a lightweight social platform built around simple text + video chat Rooms, grouped into themed Portals.

This MVP includes the core experience: entering Rooms, chatting, exploring Portals, and navigating the platform through a unified Explore Hub.


## 🚀 Features (MVP v1)

- **Rooms** — Interest-based spaces with text and optional video chat
- **Portals** — Work, Sports, Education, Entertainment, Health, Relationships, Technology
- **Holodeck** — Create or join private Rooms by typing a name
- **Explore Hub** — Cross-platform search (Messages, Rooms, Posts, People) + Explore mode
- **Posts System** — Global and room-specific posts
- **Fresh DB Tools** — Script to generate a new SQLite DB with seeded rooms/posts
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
- **SQLite 3**
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
├── admin/                   # Admin tools (post editor, db browser, etc.)
├── comms/                   # Chat backend + WebSocket glue
├── data/                    # SQLite database(s)
├── tools/                   # Fresh DB init + room_seed builder scripts
├── css/                     # styles.css and custom.css
├── js/                      # chat.js and other frontend scripts
└── assets/                  # images, gifs, icons
```


## 🛠 Setup

1. Clone the repository
2. Ensure PHP + SQLite are installed
3. Configure environment/path inside `config.php`
4. Generate a fresh DB (optional):
```bash
php tools/init_fresh_comms_db.php
```
5. Make sure Apache serves the project root
6. Visit:
```arduino
https://lensshare.co/
```
(or local equivalent)


## ⚙️ Development Notes

- Messages are rendered both server-side (initial load) and via WebSocket
- Outgoing and incoming messages have matching HTML markup
- Fresh DB script seeds:
    - **Main Room**
    - All Portal Rooms
    - 2 global posts
- Room search indexing is limited to message bodies + user names
- `room.php` is intentionally `noindex,follow` due to dynamic content


## 📜 License

MVP internal project. No explicit open-source license yet.


## 🏷 Version

v1.0.0-mvp