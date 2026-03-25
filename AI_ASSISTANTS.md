# AI Assistant Configuration

This project uses Kiro as the primary AI coding assistant with full IDE integration.

## Directory Structure

```
.kiro/
├── settings/
│   └── mcp.json           # MCP server configuration
├── skills/
│   ├── laravel-best-practices/
│   ├── laravel-module-structure/
│   └── tailwindcss-development/
├── steering/
│   └── module-structure.md
└── README.md
```

## Configuration Files

### `.kiro/settings/mcp.json`
Configures Model Context Protocol (MCP) servers that provide additional tools and capabilities.

**Current servers:**
- `laravel-boost` - Laravel development tools and helpers

### `.kiro/skills/`
Specialized knowledge modules for specific topics:
- `laravel-best-practices` - Laravel coding standards and patterns
- `laravel-module-structure` - Module organization guidelines
- `tailwindcss-development` - Tailwind CSS development guidelines

### `.kiro/steering/`
Auto-included context files that are always available:
- `module-structure.md` - Module structure guidelines

## MCP Servers

### Laravel Boost
Provides Laravel-specific tools and capabilities.

**Command:** `php artisan boost:mcp`

**Features:**
- Laravel project analysis
- Code generation helpers
- Migration tools
- Route inspection

### Managing MCP Servers

**Via Command Palette:**
- "MCP: Manage Servers" - Open server management UI
- "MCP: Reconnect Servers" - Reconnect all servers

**Via Configuration:**
Edit `.kiro/settings/mcp.json`:
```json
{
    "mcpServers": {
        "server-name": {
            "command": "command",
            "args": ["arg1", "arg2"],
            "env": {
                "ENV_VAR": "value"
            },
            "disabled": false,
            "autoApprove": []
        }
    }
}
```

## Skills

Skills provide specialized knowledge that can be referenced in prompts.

### Using Skills

Reference a skill in your prompt:
```
Use the laravel-module-structure skill to create a new module
```

Or use the context selector:
```
#laravel-module-structure
```

### Available Skills

#### laravel-best-practices
Comprehensive Laravel coding standards covering:
- Architecture patterns
- Eloquent best practices
- Security guidelines
- Performance optimization
- Testing strategies

#### laravel-module-structure
Module organization guidelines including:
- Directory structure
- Namespace conventions
- Database folder locations
- Service providers
- Route attributes
- Factory configuration

#### tailwindcss-development
Tailwind CSS development guidelines for:
- Component patterns
- Responsive design
- Utility-first approach
- Custom configurations

### Adding New Skills

1. Create directory: `.kiro/skills/skill-name/`
2. Create `SKILL.md` with frontmatter:
```markdown
---
name: Skill Name
description: Brief description
version: 1.0.0
tags: [tag1, tag2]
---

# Skill content here
```

## Steering Files

Steering files are automatically included in the AI context without explicit reference.

### Current Steering Files

**module-structure.md**
- Auto-included module structure guidelines
- Critical rules for module organization
- Database folder location requirements

### Frontmatter Options

```markdown
---
inclusion: auto          # Always included
priority: 100           # Higher priority = loaded first
---
```

Other inclusion options:
- `manual` - Only when explicitly referenced with #filename
- `fileMatch` - Only when specific files are in context (with fileMatchPattern)

### Adding New Steering Files

1. Create file: `.kiro/steering/filename.md`
2. Add frontmatter with inclusion settings
3. Restart Kiro or reload window

## Best Practices

1. **Skills for Reference** - Use skills for detailed guidelines that may not always be needed
2. **Steering for Critical Rules** - Use steering files for rules that should always be followed
3. **MCP for Tools** - Use MCP servers for executable tools and capabilities
4. **Keep Updated** - Update skills and steering files as project conventions evolve
5. **Document Changes** - Update this file when adding new configurations

## Troubleshooting

### Skills not loading
- Check file structure matches expected format
- Verify SKILL.md has proper frontmatter
- Restart Kiro

### MCP server not connecting
- Verify command is correct: `php artisan boost:mcp`
- Check Laravel Boost is installed
- Review logs in Kiro settings
- Try "MCP: Reconnect Servers"

### Steering files not included
- Check frontmatter inclusion setting is `auto`
- Verify file is in `.kiro/steering/`
- Restart Kiro

## Resources

- [Kiro Documentation](https://kiro.dev/docs)
- [MCP Protocol](https://modelcontextprotocol.io)
- [Laravel Boost](https://github.com/laravel/boost)
- `.kiro/README.md` - Detailed Kiro configuration guide
- `MODULE_STRUCTURE.md` - Complete module structure documentation
