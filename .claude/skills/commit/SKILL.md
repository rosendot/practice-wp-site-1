# Commit Changes

Stages, reviews, and commits all current changes with a descriptive message.

## Usage
`/commit` — auto-generates a commit message based on the changes
`/commit <message>` — uses the provided message

## Steps
1. Run `git status` to see all changed and untracked files
2. Run `git diff` to review staged and unstaged changes
3. Run `git log --oneline -5` to check recent commit message style
4. If no `$ARGUMENTS` provided, analyze the changes and draft a concise commit message in imperative style (e.g., "Add hero section", "Fix nav responsive styling")
5. If `$ARGUMENTS` provided, use that as the commit message
6. Stage only relevant files by name — never use `git add -A` or `git add .`
7. Do NOT stage `.env` files, `vendor/`, `web/wp/`, or anything in `.gitignore`
8. Create the commit with the message, appending the co-author line:
   ```
   Co-Authored-By: Claude Opus 4.6 <noreply@anthropic.com>
   ```
9. Run `git status` after to confirm the commit succeeded
10. Show the user the commit hash and summary
