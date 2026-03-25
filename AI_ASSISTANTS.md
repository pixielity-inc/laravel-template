# AI Assistant Configuration

This project includes configuration for multiple AI coding assistants to ensure consistent development experience across different tools.

## Directory Structure

```
.
├── .kiro/              # Kiro AI configuration
│   ├── settings/
│   │   └── mcp.json
│   ├── skills/
│   └── steering/
├── .cursor/            # Cursor IDE configuration
│   ├── mcp.json
│   └── skills/
├── .claude/            # Claude Desktop configuration
│   └── skills/
└── .mcp.json          # Root MCP config (shared)
```

## AI Assistants

### Kiro (Primary)
**Directory:** `.kiro/`

Kiro is the primary AI assistant for this project with full IDE integration.

**Features:**
- Skills: Specialized knowledge modules
- Steering: Auto-included context
- MCP Servers: Extended capabilities via Model Context Protocol
- Hooks: Automated workflows

**Configuration:**
- Settings: `.kiro/settings/mcp.json`
- Skills: `.kiro/skills/`
- Steering: `.kiro/steering/`

### Cursor IDE
**Directory:** `.cursor/`

Cursor is an AI-powered code editor.

**Configuration:**
- MCP: `.cursor/mcp.json`
- Skills: `.cursor/skills/`

### Claude Desktop
**Directory:** `.claude/`

Claude Desktop app for AI assistance.

**Configuration:**
- Skills: `.claude/skills/`

## Shared Configuration

### MCP Servers (`.mcp.json`)
Root-level MCP configuration shared across assistants.

**Current servers:**
- `laravel-boost` - Laravel development tools

```json
{
    "mcpServers": {
        "laravel-boost": {
            "command": "php",
            "args": ["artisan", "boost:mcp"]
        }
    }
}
```

## Skills

Skills provide specialized knowledge for specific topics. They are synchronized across all AI assistants.

### Available Skills

1. **laravel-best-practices**
   - Laravel coding standards
   - Architecture patterns
   - Security best practices
   - Performance optimization

2. **laravel-module-structure**
   - Module organization
   - Directory structure
   - Naming conventions
   - Best practices

3. **tailwindcss-development**
   - Tailwind CSS guidelines
   - Component patterns
   - Responsive design

### Skill Locations

Skills are duplicated across directories for compatibility:
- `.kiro/skills/` - Kiro
- `.cursor/skills/` - Cursor
- `.claude/skills/` - Claude

**Note:** When updating skills, update all three locations or use symlinks.

## Steering Files (Kiro Only)

Steering files in `.kiro/steering/` are automatically included in Kiro's context.

**Current files:**
- `module-structure.md` - Module structure guidelines

**Frontmatter options:**
```markdown
---
inclusion: auto          # Always included
inclusion: manual        # Only when referenced
inclusion: fileMatch     # When specific files are in context
priority: 100           # Loading priority
---
```

## MCP Servers

### Laravel Boost
Provides Laravel-specific tools and capabilities.

**Command:** `php artisan boost:mcp`

**Features:**
- Laravel project analysis
- Code generation
- Migration helpers
- Route inspection

### Adding New MCP Servers

1. **For Kiro:** Edit `.kiro/settings/mcp.json`
2. **For Cursor:** Edit `.cursor/mcp.json`
3. **For shared:** Edit `.mcp.json`

Example:
```json
{
    "mcpServers": {
        "server-name": {
            "command": "command",
            "args": ["arg1", "arg2"],
            "env": {
                "ENV_VAR": "value"
            },
            "disabled": false
        }
    }
}
```

## Synchronizing Skills

To keep skills synchronized across all assistants:

### Option 1: Manual Copy
```bash
# Copy from Kiro to others
cp -r .kiro/skills/* .cursor/skills/
cp -r .kiro/skills/* .claude/skills/
```

### Option 2: Symlinks (macOS/Linux)
```bash
# Remove existing and create symlinks
rm -rf .cursor/skills .claude/skills
ln -s .kiro/skills .cursor/skills
ln -s .kiro/skills .claude/skills
```

### Option 3: Git Hooks
Create a pre-commit hook to sync automatically.

## Best Practices

1. **Primary Configuration:** Use `.kiro/` as the source of truth
2. **Sync Skills:** Keep skills synchronized across all directories
3. **MCP Servers:** Configure in `.kiro/settings/mcp.json` for Kiro-specific features
4. **Documentation:** Update this file when adding new assistants or configurations
5. **Version Control:** Commit all AI configuration directories

## Choosing an Assistant

### Use Kiro when:
- Full IDE integration needed
- Using hooks and automation
- Need steering files
- Primary development environment

### Use Cursor when:
- Prefer Cursor IDE
- Need Cursor-specific features
- Collaborative coding

### Use Claude Desktop when:
- Quick questions
- Code review
- Documentation writing
- Outside IDE context

## Resources

- [Kiro Documentation](https://kiro.dev/docs)
- [Cursor Documentation](https://cursor.sh/docs)
- [Claude Documentation](https://claude.ai/docs)
- [MCP Protocol](https://modelcontextprotocol.io)
- [Laravel Boost](https://github.com/laravel/boost)

## Troubleshooting

### Skills not loading
- Check file structure matches expected format
- Verify SKILL.md has proper frontmatter
- Restart the AI assistant

### MCP server not connecting
- Verify command is correct
- Check server is installed
- Review logs in assistant settings
- Try reconnecting: "MCP: Reconnect Servers"

### Steering files not included
- Check frontmatter inclusion setting
- Verify file is in `.kiro/steering/`
- Restart Kiro
