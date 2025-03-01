<?php

// foreach (range(1, 30) as $n) {
//     content(LOT . D . 'tag' . D . 'juz-' . $n . D . 'id.data', crc32('juz-' . $n), 0600);
//     content(LOT . D . 'tag' . D . 'juz-' . $n . D . 'time.data', date('Y-m-d H:i:s'), 0600);
//     content(LOT . D . 'tag' . D . 'juz-' . $n . '.archive', <<<PAGE
// ---
// title: Juz’ {$n}
// author: '@taufik-nurrohman'
// ...
// PAGE, 0600);
// }
//
// exit;

// foreach (range(1, 556) as $n) {
//     content(LOT . D . 'tag' . D . 'ruku-' . $n . D . 'id.data', crc32('ruku-' . $n), 0600);
//     content(LOT . D . 'tag' . D . 'ruku-' . $n . D . 'time.data', date('Y-m-d H:i:s'), 0600);
//     content(LOT . D . 'tag' . D . 'ruku-' . $n . '.archive', <<<PAGE
// ---
// title: Rukūʿ {$n}
// author: '@taufik-nurrohman'
// ...
// PAGE, 0600);
// }
//
// exit;

// foreach (range(1, 7) as $n) {
//     content(LOT . D . 'tag' . D . 'manzil-' . $n . D . 'id.data', crc32('manzil-' . $n), 0600);
//     content(LOT . D . 'tag' . D . 'manzil-' . $n . D . 'time.data', date('Y-m-d H:i:s'), 0600);
//     content(LOT . D . 'tag' . D . 'manzil-' . $n . '.archive', <<<PAGE
// ---
// title: Manzil {$n}
// author: '@taufik-nurrohman'
// ...
// PAGE, 0600);
// }
//
// exit;

// foreach (range(1, 240) as $n) {
//     content(LOT . D . 'tag' . D . 'hizb-' . $n . D . 'id.data', crc32('hizb-' . $n), 0600);
//     content(LOT . D . 'tag' . D . 'hizb-' . $n . D . 'time.data', date('Y-m-d H:i:s'), 0600);
//     content(LOT . D . 'tag' . D . 'hizb-' . $n . '.archive', <<<PAGE
// ---
// title: Ḥizb {$n}
// author: '@taufik-nurrohman'
// ...
// PAGE, 0600);
// }
//
// exit;

// $folder = LOT . D . 'page' . D . 'test' . D . 'x' . D . 'page' . D . 'quran';
//
// content($folder . '.page', <<<PAGE
// ---
// title: The Holy Quran
// description: >-
//   Using the Quran to stress test the [Page](https://mecha-cms.com/store/extension/page) extension. Let’s see how much
//   memory is used to list all the pages. The list is sorted by the `ayah` and `surah` key embedded in the file content,
//   so a partial reading of the file content is necessary.
// author: '@taufik-nurrohman'
// type: Markdown
// chunk: 144
// sort: [ 1, surah ]
// ...
//
// The Quran, also romanized Qur’an or Koran, is the central religious text of Islam, believed by Muslims to be a
// revelation directly from God (_Allāh_). It is organized in 114 chapters (_sūrah, pl. suwer_) which consist of individual
// verses (_āyah_). Besides its religious significance, it is widely regarded as the finest work in Arabic literature, and
// has significantly influenced the Arabic language. It is the object of a modern field of academic research known as
// Quranic studies.
//
// Muslims believe the Quran was orally revealed by God to the final Islamic prophet Muhammad through the angel Gabriel
// incrementally over a period of some 23 years, beginning on the Laylat al-Qadr, when Muhammad was 40, and concluding in
// 632, the year of his death. Muslims regard the Quran as Muhammad’s most important miracle, a proof of his prophethood,
// and the culmination of a series of divine messages starting with those revealed to the first Islamic prophet Adam,
// including the holy books of the Torah, Psalms, and Gospel in Islam.
//
// The Quran is believed by Muslims to be God’s own divine speech providing a complete code of conduct across all facets of
// life. This has led Muslim theologians to fiercely debate whether the Quran was “created or uncreated”. According to
// tradition, several of Muhammad’s companions served as scribes, recording the revelations. Shortly after Muhammad’s
// death, the Quran was compiled on the order of the first caliph Abu Bakr (r. 632–634) by the companions, who had written
// down or memorized parts of it. Caliph Uthman (r. 644–656) established a standard version, now known as the Uthmanic
// codex, which is generally considered the archetype of the Quran known today. There are, however, variant readings, with
// some differences in meaning.
//
// The Quran assumes the reader’s familiarity with major narratives recounted in the Biblical and apocryphal texts. It
// summarizes some, dwells at length on others and, in some cases, presents alternative accounts and interpretations of
// events. The Quran describes itself as a book of guidance for humankind ([2:185](https://quran.com/2?startingVerse=185)).
// It sometimes offers detailed accounts of specific historical events, and it often emphasizes the moral significance of
// an event over its narrative sequence.
//
// Supplementing the Quran with explanations for some cryptic Quranic narratives, and rulings that also provide the basis
// for Islamic law in most denominations of Islam, are hadiths—oral and written traditions believed to describe words and
// actions of Muhammad. During prayers, the Quran is recited only in Arabic. Someone who has memorized the entire Quran is
// called a _hafiz_. Ideally, verses are recited with a special kind of prosody reserved for this purpose called _tajwid_.
// During the month of Ramadan, Muslims typically complete the recitation of the whole Quran during _tarawih_ prayers. In
// order to extrapolate the meaning of a particular Quranic verse, Muslims rely on exegesis, or commentary rather than a
// direct translation of the text. [^1]
//
//  [^1]: Text from [Wikipedia](https://en.wikipedia.org/wiki/Quran "Quran · Wikipedia").
// PAGE);
//
// if ($surahs = fetch('https://quranapi.pages.dev/api/surah.json')) {
//     if (is_array($surahs = json_decode($surahs, true))) {
//         foreach ($surahs as $k => $v) {
//             $k = $k + 1;
//             $path = $folder . D . To::kebab($v['surahName']);
//             $v['surahName'] = strtr($v['surahName'], ["'" => "’"]);
//             content($path . '.page', <<<PAGE
// ---
// surah: {$k}
// title: {$v['surahNameArabic']} ({$v['surahName']})
// description: It means “{$v['surahNameTranslation']}” in English.
// author: '@taufik-nurrohman'
// type: Markdown
// chunk: {$v['totalAyah']}
// sort: [ 1, ayah ]
// ...
// PAGE, 0600);
//             content($path . D . 'time.data', $time = '2025-02-28 22:48:12', 0600);
//             if ($revelationPlace = $v['revelationPlace'] ?? 0) {
//                 content($path . D . 'kind.data', '[' . ('Mecca' === $revelationPlace ? '1158076311' : '1503081466') . ']', 0600);
//             }
//             if ($surah = fetch('https://quranapi.pages.dev/api/' . $k . '.json')) {
//                 if (is_array($surah = json_decode($surah, true))) {
//                     foreach ($surah['arabic1'] as $kk => $vv) {
//                         $prefix = $suffix = "";
//                         $translation = trim($surah['english'][$kk] ?? "");
//                         $kk = $kk + 1;
//                         $vv = trim($vv);
//                         if ($translation && false === strpos('0123456789', $translation[0]) && $translation[0] === mb_strtolower($translation[0])) {
//                             $prefix = '[…](ayah-' . ($kk - 1) . ') ';
//                         }
//                         if ($translation && false === strpos('!.?', substr($translation, -1))) {
//                             $suffix = ' […](ayah-' . ($kk + 1) . ')';
//                         }
//                         $vv = "### Arabic\n\n" . $prefix . $vv . $suffix;
//                         $translation = "" !== $translation ? "\n\n### English\n\n" . $prefix . $translation . $suffix : "";
//                         content($path . D . 'ayah-' . $kk . D . 'time.data', $time, 0600);
//                         content($path . D . 'ayah-' . $kk . '.page', <<<PAGE
// ---
// ayah: {$kk}
// title: Āyah {$kk}
// description: Content of sūrah {$v['surahName']} āyah {$kk}.
// author: '@taufik-nurrohman'
// type: Markdown
// ...
//
// {$vv}{$translation}
// PAGE, 0600);
//                     }
//                 }
//             }
//         }
//     }
// }

// foreach (g($folder = LOT . D . 'page' . D . 'test' . D . 'x' . D . 'page' . D . 'quran', 'page') as $k => $v) {
//     $v = new Page($k);
//     $surah = $v->surah;
//     if ($surahs = fetch('http://api.alquran.cloud/v1/surah/' . $surah)) {
//         if (is_array($surahs = json_decode($surahs, true))) {
//             $ayahs = $surahs['data']['ayahs'];
//             foreach ($ayahs as $vv) {
//                 if (is_file($ayah = dirname($k) . D . pathinfo($k, PATHINFO_FILENAME) . D . 'ayah-' . $vv['numberInSurah'] . '.page')) {
//                     $kind = content(dirname($ayah) . D . pathinfo($ayah, PATHINFO_FILENAME) . D . 'kind.data') ?? '[]';
//                     if (is_array($kind = json_decode($kind, true))) {
//                         $kind[] = crc32('juz-' . $vv['juz']);
//                         $kind[] = crc32('manzil-' . $vv['manzil']);
//                         $kind[] = crc32('ruku-' . $vv['ruku']);
//                         $kind[] = crc32('hizb-' . $vv['hizbQuarter']);
//                     }
//                     sort($kind);
//                     content(dirname($ayah) . D . pathinfo($ayah, PATHINFO_FILENAME) . D . 'kind.data', json_encode($kind), 0600);
//                 }
//             }
//         }
//     }
// }
//
// exit;

// if ($sajdas = fetch('http://api.alquran.cloud/v1/sajda/quran-uthmani')) {
//     if (is_array($sajdas = json_decode($sajdas, true))) {
//         $ayahs = $sajdas['data']['ayahs'];
//         foreach ($ayahs as $v) {
//             if (is_file($ayah = LOT . D . 'page' . D . 'test' . D . 'x' . D . 'page' . D . 'quran' . D . To::kebab($v['surah']['englishName']) . D . 'ayah-' . $v['numberInSurah'] . '.page')) {
//                 $kind = content(dirname($ayah) . D . pathinfo($ayah, PATHINFO_FILENAME) . D . 'kind.data') ?? '[]';
//                 if (is_array($kind = json_decode($kind, true))) {
//                     $kind[] = crc32('sajda');
//                 }
//                 sort($kind);
//                 $kind = array_values(array_unique($kind));
//                 content(dirname($ayah) . D . pathinfo($ayah, PATHINFO_FILENAME) . D . 'kind.data', json_encode($kind), 0600);
//             }
//         }
//     }
// }
//
// exit;