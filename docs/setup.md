# Setup

1. Get your Pexels API key here: https://www.pexels.com/de-de/api/
2. Add to your config: `'mauricerenck.PexelsImageField.apiKey' => 'APIKEY',`
3. Add the field to your blueprint: 

```
fields:
  pexels:
    type: pexels
    label: Pexels
```

You can modify the number of images shown using `'mauricerenck.PexelsImageField.images' => '12'`
You can modify the size of the downloaded image using `'mauricerenck.PexelsImageField.downloadSize' => 'medium'` (see options for all sizes)