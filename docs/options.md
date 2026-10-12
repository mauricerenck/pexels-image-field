| option       | default | description                                                             |
| ------------ | ------- | ----------------------------------------------------------------------- |
| images       | 12      | Set a number of images                                                  |
| apiKey       | ''      | See: https://www.pexels.com/de-de/api/                                  |
| downloadSize | 'large' | 'tiny', 'small', 'medium', 'large', 'portrait', 'landscape', 'original' |

## Per-field `downloadSize` and landscape search

The option `downloadSize` can also be set per field in the blueprint. The blueprint value takes precedence over the option in `config.php`:

```yaml
fields:
  cover:
    type: pexels
    label: Landscape photo
    downloadSize: landscape
```

If `downloadSize` is `landscape`, the search is additionally restricted to landscape-oriented photos (Pexels `orientation=landscape`), so the search results match the size that is downloaded.
