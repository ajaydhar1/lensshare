(() => {
  const rooms = [];

  document.querySelectorAll('a[href*="room="]').forEach(a => {
    try {
      const url = new URL(a.href, location.href);
      const room = url.searchParams.get('room');
      if (room) {
        rooms.push({
          text: a.textContent.trim(),
          href: a.href,
          room
        });
      }
    } catch (e) {
      // ignore bad URLs
    }
  });

  console.table(rooms);
  rooms.map(r => r.room); // this returns just the list of room values
  const uniqueRooms = [...new Set(rooms.map(r => r.room))];
  console.log(uniqueRooms);
})();