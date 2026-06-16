# Portfolio сайт (GitHub Pages)

Това е статичен личен portfolio сайт, подготвен за публикуване с GitHub Pages от `main` branch и root директория.

## Съдържание

- Начало (hero секция)
- За мен
- Умения
- Проекти (с локални screenshot изображения)
- Контакти (Email, GitHub, LinkedIn)

## Файлова структура

- `index.html` — основна страница
- `styles.css` — стилове
- `script.js` — мобилно меню
- `assets/screenshots/` — screenshot файлове за проектите
- `.nojekyll` — гарантира коректно статично публикуване в GitHub Pages

## Локален преглед

Няма нужда от инсталации или build стъпки.

1. Отвори `index.html` директно в браузър **или**
2. Стартирай локален сървър:

```bash
python3 -m http.server 8000
```

След това отвори: `http://localhost:8000`

## Публикуване в GitHub Pages

1. В GitHub отвори: **Settings → Pages**
2. В **Source** избери: **Deploy from a branch**
3. Избери branch: **main**
4. Избери folder: **/ (root)**
5. Запази настройките и изчакай публикацията

Очакван URL:
`https://ch1ng1.github.io/Ch1Ng111/`

## Бележка

В тази среда мога да подготвя файловете за GitHub Pages, но самото включване на Pages става от настройките на репозитория.
