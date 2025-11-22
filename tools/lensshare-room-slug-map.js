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

  // Full list (including duplicates) for inspection
  console.table(rooms);

  // Unique slugs
  const uniqueRooms = [...new Set(rooms.map(r => r.room))];

  // Build mapping: slug -> button text (first occurrence wins)
  const slugMap = {};
  uniqueRooms.forEach(slug => {
    const match = rooms.find(r => r.room === slug);
    if (match) {
      slugMap[slug] = match.text;
    }
  });

  //console.log('Unique room slugs:', uniqueRooms);
  console.log('Slug → Button text map:', slugMap);
  console.log('JSON:\n', JSON.stringify(slugMap, null, 2));

  // If you still want just the list of slugs as a return value:
  uniqueRooms;
})();
