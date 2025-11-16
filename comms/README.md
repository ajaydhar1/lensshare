# Comms Portal

Comms is a lightweight, self-contained communications portal you can drop into any project. It includes real-time chat rooms, a small admin area, and optional “Watch Together” video syncing.

The goal is to provide a simple, portable way for teams or communities to talk, share, and coordinate — without needing a large backend or complex infrastructure.

## Features
### 💬 Real-Time Chat
- Multiple rooms
- User display names
- Lightweight, fast UI

### 🎥 Watch Together Mode
- Share a YouTube video
- One person hosts, everyone else syncs
- Play/pause/seek updates in real time

### 🛠 Admin Tools
- View logs
- Browse the SQLite database
- Quick room links
- Simple KPI counters

### ⚙️ Drop-In Setup
- Lives entirely inside the `/comms` folder
- Works locally and in the cloud
- Uses a single `config.php` for all paths and settings

### How to Use It
1. Drop the comms/ folder into your project.
2. Visit:
   ```
   /comms/?room=demo
   ```
3. Open the admin tools at:
   ```
   /comms/admin/
   ```

No external dependencies are required beyond PHP and SQLite.

### Status
This is an early usable version of the platform.  
The structure and configuration are stable, and the core features work cleanly.  
Future updates will expand the UI, add integrations, and refine the admin experience.


## Planned Features
These are the next improvements planned for the Comms platform:

### 1. Room Onboarding Tool

A simple admin utility for adding many rooms at once.

You’ll be able to paste a list of room names and generate all the rooms instantly — useful for large groups, projects, or events.

### 2. Posts Management Dashboard

An admin interface for:
- Creating new posts
- Editing existing posts
- Archiving old posts
- Unarchiving when needed

This will make content management easier and more organized across the platform.