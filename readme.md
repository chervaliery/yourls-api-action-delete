# Plugin for YOURLS 1.6+: Custom API Action (delete a URL by keyword)

This plugin adds a custom API action at `delete` to delete a ShortURL by its keyword:

## Sample result

Using a URL such as `https://yourls-domain.com/yourls-api.php?signature=1002a612b4&action=delete&keyword=toto&format=json`:

```json
{
  "statusCode": 200,
  "message": "success",
  "result": 1
}

```

# Setup

1. Upload this folder to `/user/plugins`.
2. Activate this plugin from the Plugins administration page.
