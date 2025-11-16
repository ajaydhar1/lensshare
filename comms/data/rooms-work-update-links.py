import re

LINKS_FILE = "rooms-work-links.txt"
SLUGS_FILE = "rooms-work-slugs-shortened.txt"
OUTPUT_FILE = "rooms-work-links-updated.txt"

def main():
    # Read all slugs (strip whitespace, ignore empty lines)
    with open(SLUGS_FILE, "r", encoding="utf-8") as f:
        slugs = [line.strip() for line in f if line.strip()]

    # Read all link lines
    with open(LINKS_FILE, "r", encoding="utf-8") as f:
        links = [line.rstrip("\n") for line in f]

    if len(slugs) != len(links):
        print(f"Warning: {len(slugs)} slugs vs {len(links)} link lines")
        # You can choose to exit here if you want:
        # return

    updated_lines = []
    # Regex to match room=<value>, where value goes until " or & or end
    room_pattern = re.compile(r'(room=)([^"&]+)')

    for i, line in enumerate(links):
        if i >= len(slugs):
            # No matching slug, just keep the line as-is
            updated_lines.append(line)
            continue

        slug = slugs[i]

        # Replace the room= value with the slug
        def repl(match):
            return match.group(1) + slug

        new_line, count = room_pattern.subn(repl, line, count=1)
        if count == 0:
            # No room= found; optionally log or just keep line
            print(f"Warning: no room= found in line {i+1}: {line}")
            new_line = line

        updated_lines.append(new_line)

    # Write out the updated file
    with open(OUTPUT_FILE, "w", encoding="utf-8") as f:
        for line in updated_lines:
            f.write(line + "\n")

    print(f"Done. Wrote {len(updated_lines)} lines to {OUTPUT_FILE}")

if __name__ == "__main__":
    main()
