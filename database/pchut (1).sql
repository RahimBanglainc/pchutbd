-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 03:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pchut`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blog.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `img`, `body`, `view_count`, `status`, `created_at`, `updated_at`) VALUES
(1, '৩০ হাজার টাকার মধ্যে সেরা ৫টি ল্যাপটপ.', '30-hajar-takar-mdhze-sera-5ti-lzaptp5f21960bccb18', '30-hajar-takar-mdhze-sera-5ti-lzaptp5f21960bccb18-2020-07-29-5f21960bccb4c-jpg', '<p>আজকাল ব্যবসায়ী থেকে শুরু করে শিক্ষার্থী, ফ্রিল্যান্সার, পেশাদার সবাই কম্পিউটার হিসেবে ল্যাপটপকেই বেছে নিচ্ছেন। এক সময় ল্যাপটপকে অনেক ব্যয়বহুল একটি ডিভাইস হিসেবে গণ্য করা হলেও বর্তমানে খুব কম মূল্যে ভালো মানের ল্যাপটপ ক্রয় করা সম্ভব। তাহলে চলুন জেনে নেওয়া যাক বাংলাদেশে ৩০ হাজার টাকার মধ্যে ৫টি আকর্ষণীয় ল্যাপটপ সম্পর্কে। তাছাড়া অধিক কনফিগারেশনের ল্যাপটপ সম্পর্কে&nbsp;<a href=\"https://www.bdstall.com/laptop/\">এখানে জানতে পারবেন</a>।<br />&nbsp;</p>\r\n<p><img src=\"https://www.bdstall.com/asset/magazine-image/940_giant.jpg\" alt=\"\" /></p>\r\n<p><strong>১</strong><strong>/&nbsp;</strong><strong><a href=\"https://www.bdstall.com/details/asus-x540ya-amd-e1-6010-4gb-ram-1tb-hdd-156-laptop-39187/\">Asus X540YA AMD E1-6010 4GB RAM 1TB HDD 15.6&Prime; Laptop</a></strong></p>\r\n<p>&nbsp;</p>\r\n<p>৩০ হাজার টাকার মধ্যে বাজেট ল্যাপটপ হিসেবে অন্যতম সেরা ল্যাপটপ এটি। ল্যাপটপটিতে কনফিগারেশন হিসেবে দেওয়া হয়েছে ৪ জিবি র&zwnj;্যাম এবং ১ টেরাবাইট হার্ডডিস্ক ডাইভ স্টোরেজ।&nbsp; এছাড়াও প্রসেসর হিসেবে রয়েছে ১.৪ গিগাহার্টজের এএমডি ডুয়াল কোর প্রসেসর এবং সাথে রয়েছে ১৫.৬ ইঞ্চি মাপের এইচডি রেজুলেশনের ডিসপ্লে যার ফলে এই ল্যাপটপটি ব্যবহার করে আপনি সবচেয়ে বেশি সাচ্ছন্দ্য বোধ করবেন।&nbsp; ল্যাপটপটিতে নেটওয়ার্কিং হিসেবে রয়েছে ল্যান, ইউএসবি, ওয়াইফাই ও ব্লুটুথ সংযোগ প্রদানের সুবিধা ।&nbsp; ল্যাপটপটির ওজন মাত্র ১.৮ কেজি যা আপনি বাসায়, অফিসে এমনকি যে কোন স্থানে খুব সহজে ক্যারি করতে পারবেন ।&nbsp; ল্যাপটপটিতে রয়েছে ৩ সেল ব্যাটারি এবং সাথে আরো পাবেন ২বছরের ওয়ারেন্টি, ব্যাটারি ও এডাপ্টার ১বছরের ওয়ারেন্টি।&nbsp; ল্যাপটপটির বর্তমান মূল্য মাত্র ২৪,০০০ টাকা।<br /><br /><img src=\"https://www.bdstall.com/asset/magazine-image/929_giant.jpg\" alt=\"\" /></p>\r\n<p><strong>২</strong><strong>/&nbsp;</strong><strong><a href=\"https://www.bdstall.com/details/acer-aspire-a315-21-46zb-amd-a4-9120e-156-hd-laptop-50237/\">Acer Aspire A315-21 46ZB AMD-A4-9120E 15.6&Prime; HD Laptop</a></strong></p>\r\n<p><br />&nbsp;</p>\r\n<p>বাজেটের মধ্যে এটিও একটি সেরা ল্যাপটপ। ল্যাপটপটিতে রয়েছে ৭ম প্রজন্মের এএমডি অ৪-৯১২০ প্রসেসর যার ক্লক স্পিড হচ্ছে ২.৫০ গিগাহার্টজ । এছাড়াও রয়েছে ৪ জিবি র&zwnj;্যাম এবং ১ টেরাবাইট এইচ ডি ডি স্টোরেজ যার ফলে আপনি চাইলে হালকা পাতলা গেমিংও করতে পারবেন। এছাড়াও ব্যাটারি ব্যকাপের জন্য রয়েছে ২সেলের লি-আয়ন ব্যাটারি যা প্রায় সাড়ে ৫ঘন্টার মত ব্যাকআপ দিতে সক্ষম । ডিসপ্লে সাইজ ১৫.৬ ইঞ্চি যার রেজুলেশন ১৩৬৬ x ৭৬৮ পিক্সেল। ল্যাপটপটিতে নেটওয়ার্কিং হিসেবে পাবেন ওয়ারলেস ল্যান, ওয়াইফাই এবং ব্লুটুথ। এছাড়াও রয়েছে ৬৪০ x ৪৮০ ওয়েবক্যাম ৩০০কিলোপিক্সেল ফন্ট ক্যামেরা। ল্যাপটপটির ওজন মাত্র ২.১ কেজি এবং ল্যাপটপটির বর্তমান মূল্য মাত্র ২৪,৮০০ টাকা।<br />&nbsp;</p>\r\n<p><img src=\"https://www.bdstall.com/asset/magazine-image/941_giant.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>৩</strong><strong>/&nbsp;</strong><strong><a href=\"https://www.bdstall.com/details/hp-14-bw077au-amd-dual-core-14-radeon-graphics-hd-laptop-39971/\">HP 14-bw077au AMD Dual Core 14&Prime; Radeon Graphics HD Laptop</a></strong></p>\r\n<p><br />৩০ হাজার টাকার মধ্যে বাজেট ল্যাপটপ কিনতে চাইলে বিশ্বের সবচেয়ে জনপ্রিয় ল্যাপটপ ব্রান্ড এইচপির এই ল্যাপটপটি নিতে পারেন।&nbsp;এতে রয়েছে এএমডির ৭ম প্রজন্মের ডুয়ালকোর E2-9000e প্রসেসর যার স্পিড হচ্ছে আপ টু ২ গিগাহার্টজ। এছাড়াও রয়েছে ৪ জিবি র&zwnj;্যাম এবং ৫০০ জিবি হার্ডডিস্ক স্টোরেজ সাথে রয়েছে ১৪ ইঞ্চি ব্রাইটভিউ এইচডি ডিসপ্লে । এছাড়াও পাবেন ৪সেল লি-আয়ন ব্যাটারি ব্যকআপ। ল্যাপটপটির ওজন মাত্র ১.৭ কেজি তাই বহন করার জন্য এটাই সবচেয়ে সেরা ল্যাপটপ। ল্যাপটপটির বর্তমান মূল্য মাত্র ২৪, ০০০টাকা। আপনি এই ল্যাপটপটি সাধারণ কাজ ছাড়াও যদি ব্লগিং কিংবা ফ্রিলেন্সিং করতে চান তবে খুব সহজেই করতে পারবেন। বর্তমানে বাংলাদেশে&nbsp;২৫ হাজার টাকার মধ্যে এটি অন্যতম সেরা ল্যাপটপ।</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://www.bdstall.com/asset/magazine-image/944_giant.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>৪/&nbsp;</strong><strong><a href=\"https://www.bdstall.com/details/lenovo-ideapad-ip-s130-11igm-intel-116-laptop-47298/\">Lenovo IdeaPad IP S130-11IGM Intel 11.6&Prime; Laptop</a></strong></p>\r\n<p>&nbsp;</p>\r\n<p>বাজেটের মধ্যে এটিও একটি ভালো ল্যাপটপ। এটিতে কনফিগারেশন হিসেবে রয়েছে ইন্টেল CDC N4000 প্রসেসর যার স্পিড ১.১-২.৬ গিগাহার্টজ এবং আরো রয়েছে ৪ জিবি র&zwnj;্যাম এবং ৫০০ জিবি এইচ ডি ডি স্টোরেজ। ল্যাপটপটি খুবই ছোট সাইজের একটি ল্যাপটপ এর ডিসপ্লে সাইজ মাত্র ১১.৬ ইঞ্চি । ল্যাপটপটির ওজন মাত্র ১.১৫ কেজি । এছাড়াও ল্যাপটপটির ব্যাটারি ২সেলের ব্যাটারি যা দীর্ঘক্ষণ চার্জ ধরে রাখতে সক্ষম। ল্যাপটপটিতে রয়েছে ১বছরের ওয়ারেন্টি এবং ল্যাপটপটির বর্তমান মূল্য মাত্র ২৯,০০০টাকা। এই ল্যাপটপটির আকর্ষণীয় লুক ও ভাল পারফরমেন্স এর কারণে এটি বাজারে আসার পর পরই অনেক সুনাম কুড়িয়েছিল। এর মাধ্যমে গ্রাফিক্স ডিজাইন ও ওয়েব ডেভেলপমেন্ট এর মত কাজও আপনি করতে পারবেন খুব সহজেই। আপনার বাজেট যদি ৩০ হাজারের মধ্যে হয় তবে আপনি নিঃসন্দেহে এই ল্যাপটপটি নিতে পারেন।</p>\r\n<p><br /><img src=\"https://www.bdstall.com/asset/magazine-image/942_giant.jpg\" alt=\"\" /><strong>৫</strong><strong>/&nbsp;</strong><strong><a href=\"https://www.bdstall.com/details/asus-x441ma-celeron-dual-core-14-hd-laptop-49582/\">Asus X441MA Celeron Dual Core 14&Prime; HD Laptop</a></strong></p>\r\n<p><br />&nbsp;</p>\r\n<p>৩০ হাজার টাকার মধ্যে বিশ্বখ্যাত ল্যাপটপ ব্রান্ড আসুসের এই ল্যাপটপটি হতে পারে সেরা ল্যাপটপ। কারণ এটিতে রয়েছে ৪ জিবি DDR4 র&zwnj;্যাম এবং এবং ১টেরাবাইট HDD স্টোরেজ। এছাড়াও প্রসেসর হিসেবে রয়েছে ডোয়েল-কোর এন৪০০০ প্রসেসর যার আপ টু স্পিড ২.৬০ গিগাহার্টজ । ল্যাপটিতে রয়েছে ১৪ ইঞ্চি মাপের এইচডি কোয়ালিটির ডিসপ্লে এবং সাথে রয়েছে ৩ সেল ব্যাটারি। ল্যাপটপটির ওজন মাত্র ১.৭ কেজি এবং আরো রয়েছে ২বছরের ইন্টারন্যাশরাল ওয়ারেন্টি। ল্যাপটপটির বর্তমান মূল্য মাত্র ২৬,৫০০ টাকা।</p>\r\n<p>&nbsp;</p>\r\n<p>এছাড়া বাজেট যদি কিছু বেশি থাকে তবে আর কিছু ল্যাপটপের কনফিগারেশন&nbsp;<strong><a href=\"https://www.bdstall.com/laptop/\">এখানে দেখতে পারেন</a></strong>।</p>', 2, 1, '2020-07-29 09:30:20', '2020-08-04 15:33:05'),
(2, 'পদ্মা সেতু', 'pdma-setu5f21cdc333500', 'pdma-setu5f21cdc333500-2020-07-30-5f21cdc33353e-jpg', '<p>পদ্মা সেতু হলো বাংলাদেশের পদ্মা নদীর উপর নির্মাণাধীন একটি বহুমুখী সড়ক ও রেল সেতু &nbsp;যার মাধ্যমে বাংলাদেশের দক্ষিণ-পশ্চিম অঞ্চলের সাথে উত্তর-পূর্ব অঞ্চলের সংযোগ ঘটবে । সেতুটির উত্তর পাড় মুন্সীগঞ্জ, মাওয়া পয়েন্টে অবস্থিত এবং দক্ষিণ পাড় শরীয়তপুর এবং মাদারীপুর, জাজিরা পয়েন্টে অবস্থিত । সেতুটির মোট দৈর্ঘ্য হবে ৬,১৫০ মিটার বা ২০,১৮০ ফুট এবং প্রস্থ ১৮.১০&nbsp;মিটার বা ৫৯.৪ ফুট। এটির সম্পূর্ণ কাজ সম্পন্ন হলে এটিই হবে বাংলাদেশের সবচেয়ে বড় সেতু।</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://www.bdstall.com/asset/magazine-image/925_giant.jpg\" alt=\"\" /></p>\r\n<p><strong>পদ্মা&nbsp;সেতু</strong><strong>&nbsp;</strong><strong>প্রকল্প</strong></p>\r\n<p><br />২০০৭ সালের ২৮ই আগস্ট সর্বপ্রথম বাংলাদেশের সাবেক তত্বাবদায়ক সরকার পদ্মা সেতু নির্মাণের প্রকল্প পাশ করেছিলেন । যার নিমার্ণ কাজ শুরু হওয়ার কথা ছিল ২০১১সালে এবং তা শেষ হওয়ার কথা ছিল ২০১৩ সালে। কিন্তু পরবর্তীতে দেশের সরকার পরিবর্তন হওয়ায় নতুন&nbsp;সরকার এসে সেতুতে রেল পথ সংযুক্ত করেন এবং প্রথম বারের মত ২০১১ সালের ১১ জানুয়ারি সেতুর ব্যয় সংশোধন করেন । তত্বাবদায়ক সরকার সেতুর ব্যয় ধরেছিল ১০ হাজার ১৬১ কোটি টাকা কিন্তু আওয়ামী লীগ সরকার এসে সেখানে রেলপথ সংযুক্ত করায় তা বেড়ে দাড়ায় ২০ হাজার ৫০৭ কোটি টাকা &nbsp;এবং পরবর্তীতে পদ্মা সেতুর ব্যয় আরো ৮ হাজার কোটি টাকা বাড়ানো হয় এবং সবশেষে তার মোট ব্যয় দাড়ায় ২৮ হাজার ৭৯৩ কোটি টাকা।&nbsp;এবং ২০১৪ সালের ৭ইং ডিসেম্বর চুড়ান্ত ভাবে পদ্মা সেতুর কাজ আরম্ভ হয় এবং তা শেষ হওয়া কথা রয়েছে ২০২১ সালে। ২০২১ সালেই সেতুটি চলাচলের উপযুক্ত হয়ে যাবে বলে আশা করা হচ্ছে এবং সরকারের পরিকল্পনামাফিক ২০২১ সালেই সেতুটি চলাচলে জন্য উদ্বোধন করা হবে।</p>\r\n<p>&nbsp;</p>\r\n<p><strong>নকশা</strong><strong>&nbsp;</strong><strong>ও</strong><strong>&nbsp;</strong><strong>চুক্তিবদ্ধ</strong><strong>&nbsp;</strong><strong>সংস্থা</strong></p>\r\n<p><br />AECOM এর ডিজাইনে পদ্মা নদীর উপর বহুমুখী আর্থ-সামাজিক উন্নয়ন প্রকল্প &rdquo;পদ্মা বহুমুখী সেতুর&rdquo; নির্মাণকাজ শুরু হওয়ার কথা থাকলেও পদ্মা সেতুর সম্পূর্ণ নকশা তৈরি করেন AECOM এর নেতৃত্বে আন্তর্জাতিক ও দেশের জাতীয় পরামর্শকদের নিয়ে গঠিত একটি দল।&nbsp;</p>\r\n<p>সেতুটি তৈরির জন্য চুক্তিবদ্ধ হয়েছে চায়না রেলওয়ে গ্রুপ লিমিটেড এর আওতাধীন চায়না &rdquo;মেজর ব্রীজ&rdquo; নামক একটি কোম্পানী। কাজ শুরু হয় ৭ ডিসেম্বর ২০১৪ সালে। এতে মোট ব্যয় হচ্ছে ৩০ হাজার ৭৯৩ কোটি ৩৯ লাখ টাকা ।</p>\r\n<p>&nbsp;</p>\r\n<p><strong>অর্থায়ান</strong></p>\r\n<p><br />শুরুতে বিশ্বব্যাংক প্রল্পটির জন্য অর্থসহায়তার আগ্রহ দেখালেও প্রকল্প প্রস্তুতির সাথে যুক্ত কিছু লোকের দুর্নীতির অভিযোগ উঠায় বিশ্বব্যাংক তার প্রতিশ্রুতি প্রত্যাহার করে নেয় এবং অন্যান্য দাতারাও সেটি অনুসরণ করে। তবে পরবর্তীতে সেই দুর্নীতির অভিযোগ মিথ্যা প্রামাণিত হয়&nbsp;এবং কোন প্রমাণ না পাওয়ায় আদালত এই দুর্নীতির মামলাতি বাতিল করে দেয়। তবে বর্তমানে সম্পূর্ণ &rdquo;পদ্মা বহুমুখী সেতুর&rdquo; প্রকল্পটি বাস্তবায়িত হচ্ছে বাংলাদেশ সরকারের নিজস্ব অর্থায়নে।</p>\r\n<p>&nbsp;</p>\r\n<p><strong>পদ্মা</strong><strong>&nbsp;</strong><strong>সেতুর</strong><strong>&nbsp;</strong><strong>প্রয়োজনীয়তা</strong></p>\r\n<p><br />পদ্মা সেতুটির ফলে দেশের কেন্দ্র বা ঢাকার সাথে দেশের দক্ষিণ-পশ্চিম অংশের সরাসরি সংযোগ তৈরি হবে। আর বর্তমানে দেশের দক্ষিণ-পশ্চিম অংশটি তুনলামূলক কিছুটা অনুন্নত। আর এই পদ্মা সেতুটি বাস্তবায়িত হলে দেশের এই অপেক্ষাকৃত অনুন্নত অঞ্চলের সামাজিক, অর্থনৈতিক ও শিল্প বিকাশে উল্লেখযোগ্যভাবে অবদান রাখবে । প্রকল্পটির ফলে প্রত্যক্ষভাবে প্রায় ৪৪,০০০ বর্গ কিঃমিঃ (১৭,০০০ বর্গ মাইল) বা বাংলাদেশের মোট এলাকার ২৯% অঞ্চলজুড়ে ৩ কোটিরও অধিক জনগণ প্রত্যক্ষভাবে উপকৃত হবে। দেশ হয়ে উঠবে আরো গতিশীল। দেশের দক্ষিণ-পশ্চিম অঞ্চলের যোগাযোগ ঘটবে এক বিপ্লব। এছাড়াও প্রকল্পটি দেশের পরিবহন নেটওয়ার্ক এবং আঞ্চলিক অর্থনৈতিক উন্নয়নের জন্য খুব গুরুত্বপূর্ণ অবকাঠামো হিসাবে বিবেচিত হচ্ছে। সেতুটিতে ভবিষ্যতে রেল, গ্যাস, বৈদ্যুতিক লাইন এবং ফাইবার অপটিক কেবল সম্প্রসারণের ব্যবস্থা রয়েছে। এতে দেশের জিডিপি ১.২ শতাংশ পর্যন্ত বৃদ্ধি পাবে বলে ধারণা করা হচ্ছে।</p>', 5, 1, '2020-07-29 19:28:03', '2020-08-10 20:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `slug`, `img`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mobile', NULL, 'mobile', 'mobile-2020-08-08-5f2d9db69053c-png', 1, '2020-08-07 18:30:14', '2020-08-07 18:30:14'),
(3, 'Computer', NULL, 'computer', 'computer-2020-08-11-5f318ed18d7ad-png', 1, '2020-08-10 18:15:45', '2020-08-10 18:15:45'),
(4, 'PC & Laptop', NULL, 'pc-laptop', 'default.png', 1, '2020-08-12 14:51:07', '2020-08-12 14:51:07'),
(5, 'PC Parts', NULL, 'pc-parts', 'default.png', 1, '2020-08-12 14:51:51', '2020-08-12 14:51:51'),
(6, 'Laptop Accessories', NULL, 'laptop-accessories', 'default.png', 1, '2020-08-12 14:52:10', '2020-08-12 14:52:10'),
(7, 'Networking', NULL, 'networking', 'default.png', 1, '2020-08-12 14:52:25', '2020-08-12 14:52:25'),
(8, 'Projection', NULL, 'projection', 'default.png', 1, '2020-08-12 14:52:40', '2020-08-12 14:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `subcategory_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 5, 'version', '2020-08-13 16:58:27', '2020-08-13 16:58:27'),
(2, 5, 'model', '2020-08-13 17:04:39', '2020-08-13 17:04:39'),
(3, 5, 'type', '2020-08-13 17:04:57', '2020-08-13 17:04:57'),
(4, 5, 'warenty', '2020-08-13 17:05:25', '2020-08-13 17:05:25'),
(5, 5, 'test', '2020-08-17 00:12:41', '2020-08-17 00:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `feature_values`
--

CREATE TABLE `feature_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_values`
--

INSERT INTO `feature_values` (`id`, `feature_id`, `item_id`, `position`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 0, '2.0', '2020-08-13 17:45:54', '2020-08-13 17:45:54'),
(2, 3, 3, 1, 'pc', '2020-08-12 17:48:09', '2020-08-22 17:48:09'),
(4, 2, 16, 1, 'model', '2020-08-13 23:51:55', '2020-08-13 23:51:55'),
(5, 3, 16, 2, 'tyupe', '2020-08-13 23:51:55', '2020-08-13 23:51:55'),
(6, 4, 16, 3, 'fg', '2020-08-13 23:51:55', '2020-08-13 23:51:55'),
(7, 1, 17, 0, 'versionsq', '2020-08-13 23:56:37', '2020-08-13 23:56:37'),
(8, 2, 17, 1, 'model', '2020-08-13 23:56:37', '2020-08-13 23:56:37'),
(9, 3, 17, 2, 'tyupe', '2020-08-13 23:56:37', '2020-08-13 23:56:37'),
(10, 4, 17, 3, 'fg', '2020-08-13 23:56:37', '2020-08-13 23:56:37'),
(11, 1, 18, 0, 'adsfgasdg', '2020-08-14 00:00:02', '2020-08-14 00:00:02'),
(12, 1, 19, 0, 'versionsq', '2020-08-14 00:09:28', '2020-08-14 00:09:28'),
(13, 2, 19, 1, 'N/A', '2020-08-14 00:09:28', '2020-08-14 00:09:28'),
(14, 3, 19, 2, 'N/A', '2020-08-14 00:09:28', '2020-08-14 00:09:28'),
(15, 4, 19, 3, 'fg', '2020-08-14 00:09:28', '2020-08-14 00:09:28'),
(16, 1, 20, 0, 'ok', '2020-08-14 00:10:10', '2020-08-14 00:10:10'),
(17, 2, 20, 1, 'N/A', '2020-08-14 00:10:10', '2020-08-14 00:10:10'),
(18, 3, 20, 2, 'N/A', '2020-08-14 00:10:10', '2020-08-14 00:10:10'),
(19, 4, 20, 3, 'ok', '2020-08-14 00:10:10', '2020-08-14 00:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stall_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approve` tinyint(1) NOT NULL DEFAULT 0,
  `stock` tinyint(1) NOT NULL DEFAULT 1,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `ship_dhaka` decimal(8,2) NOT NULL DEFAULT 60.00,
  `ship_bd` decimal(8,2) NOT NULL DEFAULT 130.00,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'item.png',
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_id` int(11) DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `warranty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `stall_id`, `user_id`, `subcategory_id`, `views`, `status`, `is_approve`, `stock`, `title`, `slug`, `model`, `price`, `ship_dhaka`, `ship_bd`, `offer`, `img`, `img1`, `img2`, `img3`, `img4`, `description`, `feature_id`, `subcategory`, `features`, `created_at`, `updated_at`, `warranty`) VALUES
(1, 1, 2, 5, 8, 1, 1, 1, 'test', 'test-5f2edd98be58b', 'adsfadsf', '1000', '60.00', '130.00', 'test', '2020-08-11-5f31a64a08a69.jpg', NULL, NULL, NULL, NULL, 'testafkajdslkfjkljasdhfkjhasdkjfhkjasdhkfjhasdjflkj sdf lkasjdflk lkajfdlkjaldf asdfla lkfj alksdj flkasjdlk alkdjf lkdasjflkjasdlf lka flkajsdlfjlkj', NULL, NULL, NULL, '2020-08-08 17:15:04', '2020-08-16 22:05:15', NULL),
(2, 1, 2, 3, 5, 1, 1, 1, 'imageName', 'imagename-5f2f1fc879c67', 'adsfadsf', '100041', '60.00', '130.00', 'imageName', '2020-08-11-5f31a64a08a69.jpg', '0', '0', '0', '0', 'imageName', 1, NULL, NULL, '2020-08-08 21:57:28', '2020-08-14 15:59:55', NULL),
(3, 1, 2, 5, 11, 1, 1, 1, 'Gaming PC Ryzen 5 3400G 8GB RAM 500GB HDD 19\" Monitor', 'gaming-pc-ryzen-5-3400g-8gb-ram-500gb-hdd-19-monitor-5f2f2080a1696', 'Ryzen 5 3400G', '5000', '60.00', '130.00', NULL, '2020-08-11-5f31a64a08a69.jpg', '0', '0', '0', '0', 'Gigabyte A320M-S2H motherboard, 3.7 GHz base processor speed, 19\" LED monitor, DDR4 8GB RAM, view one ATX casing.', 1, NULL, NULL, '2020-08-08 22:00:32', '2020-08-14 22:30:57', '2 years warenty'),
(4, 1, 2, 5, 8, 1, 1, 1, 'ahdskjfhalksdjl lakdjfljas lkf laksdflk alkja lfkasdj llklkadjflkasjd', 'ahdskjfhalksdjl-lakdjfljas-lkf-laksdflk-alkja-lfkasdj-llklkadjflkasjd-5f2f219a6fc79', 'Ryzen 5 3400G', '5000', '60.00', '130.00', NULL, '2020-08-11-5f31a64a08a69.jpg', '0', '0', '0', '0', 'jflkajdlkfj al lasdjfl al lkajfl alkd ladjf lkal  alkdjflka   aldjfla', 1, NULL, NULL, '2020-08-08 22:05:14', '2020-08-15 08:27:25', NULL),
(5, 1, 2, 5, 4, 1, 1, 1, 'HP ProOne 400 G4 Core i7 8th Gen 23.8\" Full HD Monitor', 'hp-proone-400-g4-core-i7-8th-gen-238-full-hd-monitor-5f3162b146dd8', 'Abdurlsdofm', '12300', '60.00', '130.00', 'HP V194 18.5-inch LED backlight monitor, maximum 4.6 GHz clock speed, 12M cache, 6 cores and 12 thread, intel UHD graphics 630, A4-tech keyboard and mouse.', '2020-08-10-5f3162ac53c3a.png', '2020-08-10-5f3162adb5ec7.jpg', '2020-08-10-5f3162af5c18e.png', '2020-08-10-5f3162b0f29f9.jpg', '2020-08-10-5f3162b126ab0.jpg', 'HP V194 18.5-inch LED backlight monitor, maximum 4.6 GHz clock speed, 12M cache, 6 cores and 12 thread, intel UHD graphics 630, A4-tech keyboard and mouse.', 1, NULL, NULL, '2020-08-10 15:07:29', '2020-08-14 01:05:31', NULL),
(6, 1, 2, 5, 3, 1, 1, 1, 't4estlsa srtejklk fdalkdf la', 't4estlsa-srtejklk-fdalkdf-la-5f31a5c07a0fe', 'Ryzen 5 3400G', '523623', '60.00', '130.00', 'fadsfyasdhfkjlh asdk', '2020-08-11-5f31a5bf011ef.png', '2020-08-11-5f31a5bf673f6.jpg', '2020-08-11-5f31a5bf7eb4a.jpg', '2020-08-11-5f31a5bfda9af.png', '2020-08-11-5f31a5bff2a45.png', 'adsfjasdlkfjlsakdj flkja', 1, NULL, NULL, '2020-08-10 19:53:36', '2020-08-15 08:27:29', NULL),
(7, 1, 2, 5, 3, 1, 1, 1, 'asdghafhafdgha afg asdga gaf gasgas gas', 'asdghafhafdgha-afg-asdga-gaf-gasgas-gas-5f31a5f1bbcc2', 'Ryzen 5 3400G', '236522', '60.00', '130.00', NULL, '2020-08-11-5f31a5eed66ee.png', '0', '0', '0', '0', 'fgasdfg g asdf gasdf asdf asdg asd ggsd asdg sad', 1, NULL, NULL, '2020-08-10 19:54:25', '2020-08-12 18:30:35', NULL),
(8, 1, 2, 5, 6, 1, 1, 1, 'agdsdfgas asf hashg as ahafsha', 'agdsdfgas-asf-hashg-as-ahafsha-5f31a64a20ab1', 'sdfgasdgasga', '2000', '60.00', '130.00', 'news', '2020-08-11-5f31a64a08a69.jpg', '0', '0', '0', '0', 'hfas ha af asfh ah ah ah afha', 1, NULL, NULL, '2020-08-10 19:55:54', '2020-08-17 00:41:06', NULL),
(9, 1, 2, 4, 2, 1, 1, 1, 'Intel Core i3 3rd Gen 3.30GHz Desktop Processor', 'intel-core-i3-3rd-gen-330ghz-desktop-processor-5f343374754b8', 'Ryzen 5 3400G', '2000', '60.00', '130.00', NULL, '2020-08-13-5f343373c01f3.jpeg', '2020-08-13-5f343374496c5.png', '0', '0', '0', 'Intel core i3 3rd generation processor, 3M cache, 3.3 GHz speed, 32GB memory size.', 1, NULL, NULL, '2020-08-12 18:22:44', '2020-08-14 16:55:57', NULL),
(10, 1, 2, 5, 0, 0, 0, 1, 'sdaf', 'sdaf-5f35cb16c0c26', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35cb16114bd.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:21:58', '2020-08-13 23:21:58', 'dafsd'),
(11, 1, 2, 5, 0, 0, 0, 1, 'sdaf', 'sdaf-5f35cbb2e7013', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35cbb2c61ef.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:24:34', '2020-08-13 23:24:34', 'dafsd'),
(12, 1, 2, 5, 0, 0, 0, 1, 'sdaf', 'sdaf-5f35cd9878df3', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35cd9859383.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:32:40', '2020-08-13 23:32:40', 'dafsd'),
(13, 1, 2, 5, 0, 0, 0, 1, 'sdaf', 'sdaf-5f35cee58c2d3', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35cee573705.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:38:13', '2020-08-13 23:38:13', 'dafsd'),
(14, 1, 2, 5, 0, 0, 0, 1, 'sdaf', 'sdaf-5f35cee9e1af6', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35cee9c965d.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:38:17', '2020-08-13 23:38:17', NULL),
(15, 1, 2, 5, 3, 1, 1, 1, 'sdaf', 'sdaf-5f35d118683c3', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'adsfsdf', '2020-08-14-5f35d1184edb5.jpg', '0', '0', '0', '0', 'fadsf', 1, NULL, NULL, '2020-08-13 23:47:36', '2020-08-14 22:21:53', 'fd'),
(16, 1, 2, 5, 0, 0, 0, 1, 'dfgndf', 'dfgndf-5f35d21baab27', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'nafdgafn', '2020-08-14-5f35d21b93288.jpg', '0', '0', '0', '0', 'ngfn', 1, NULL, NULL, '2020-08-13 23:51:55', '2020-08-13 23:51:55', 'dafsd'),
(17, 1, 2, 5, 2, 1, 1, 1, 'amar sonar', 'amar-sonar-5f35d3353411b', 'Ryzen 5 3400G', '2000', '60.00', '130.00', NULL, '2020-08-14-5f35d33521dd6.png', '0', '0', '0', '0', 'bangla', 1, NULL, NULL, '2020-08-13 23:56:37', '2020-08-14 22:27:35', 'dafsd'),
(18, 1, 2, 5, 0, 0, 0, 1, 'fgadfs', 'fgadfs-5f35d4020bd95', 'Ryzen 5 3400G', '1000', '60.00', '130.00', NULL, '2020-08-14-5f35d401e5947.jpg', '0', '0', '0', '0', 'gasfdgaf', 1, NULL, NULL, '2020-08-14 00:00:02', '2020-08-14 00:00:02', NULL),
(19, 1, 2, 5, 0, 0, 1, 1, 'dasfasdfa', 'dasfasdfa-5f35d63890cfe', 'dsafsdf', '1000', '60.00', '130.00', 'adsfad', '2020-08-17-5f39c3cdc2765.jpg', '2020-08-17-5f39c43389dc6.jpg', '0', '0', '0', 'sdfadsf', 1, NULL, NULL, '2020-08-14 00:09:28', '2020-08-16 23:42:08', '3 years'),
(20, 1, 2, 5, 5, 1, 1, 1, 'ok test', 'ok-test-5f35d6624364c', 'Ryzen 5 3400G', '1000', '60.00', '130.00', 'ok', '2020-08-14-5f35d66203d09.jpeg', '0', '0', '0', '0', 'ok description', 1, NULL, NULL, '2020-08-14 00:10:10', '2020-08-16 22:05:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_user`
--

CREATE TABLE `item_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_user`
--

INSERT INTO `item_user` (`id`, `item_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 3, 2, '2020-08-14 22:31:15', '2020-08-14 22:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_20_150700_create_permissions_table', 1),
(5, '2020_07_20_150802_create_roles_table', 1),
(7, '2020_07_25_182245_create_blogs_table', 1),
(11, '2014_10_12_000000_create_users_table', 3),
(15, '2020_07_24_094531_create_categories_table', 4),
(18, '2020_08_05_002226_create_subcategories_table', 5),
(19, '2020_07_28_055235_create_stalls_table', 6),
(20, '2020_07_28_125423_create_items_table', 7),
(21, '2020_08_10_004915_create_settings_table', 8),
(22, '2020_08_13_012420_create_pages_table', 9),
(27, '2020_08_13_212100_create_features_table', 10),
(28, '2020_08_13_212301_create_feature_values_table', 10),
(29, '2020_08_14_220612_create_item_user_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `status`, `body`, `created_at`, `updated_at`, `views`) VALUES
(1, 'Page', 'page', 1, '<div class=\"\"><a href=\"https://www.bdstall.com/privacyPolicy/#Privacy/\">Our Commitment To Privacy<br /></a> <a href=\"https://www.bdstall.com/privacyPolicy/#info/\">The Information We Collect</a><br /><a href=\"https://www.bdstall.com/privacyPolicy/#Data/\">Our Commitment To Data Security</a><br /><a href=\"https://www.bdstall.com/privacyPolicy/#Correct/\">How To Access Or Correct Your Information</a><br /><a href=\"https://www.bdstall.com/privacyPolicy/#Contact/\">How To Contact Us</a><br /><hr />\r\n<h2><a name=\"Privacy\"></a>Our Commitment To Privacy:</h2>\r\n<p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.</p>\r\n<h2><a name=\"info\"></a>The Information We Collect:</h2>\r\n<p>This notice applies to all information collected or submitted on this website. On some pages, you can register to access secured features on the site. The types of personal information collected at these pages are:</p>\r\n<p>Name Address (optional)<br />Email address<br />Phone number (mandatory for stall owner)</p>\r\n<h2>The Information We DONT Collect</h2>\r\n<p>Credit/Debit Card Information</p>\r\n<h2>The Way We Use Information</h2>\r\n<p>We do not share or trade your information with any parties. We use return email addresses to answer the email we receive. Such addresses are not used for any other purpose and are not shared with outside parties.</p>\r\n<p>You can register with our website if you would like to receive updates on our new services. Information you submit on our website will not be used for this purpose unless you fill out the registration form.</p>\r\n<p>We use non-identifying and aggregate information to better design our website and to share with advertisers. For example, we may tell an advertiser that X number of individuals visited a certain area on our website, or that Y number of men and Z number of women filled out our registration form, but we would not disclose anything that could be used to identify those individuals.</p>\r\n<p>Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.</p>\r\n<h2><a name=\"Data\"></a>Our Commitment To Data Security</h2>\r\n<p>To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>\r\n<h2><a name=\"Correct\"></a>How You Can Access Or Correct Your Information</h2>\r\n<p>You can access all your personally identifiable information that we collect online and maintain by <a href=\"https://www.bdstall.com/userLogin/\"><span style=\"color: #508090;\">login here....</span></a> We use this procedure to better safeguard your information.</p>\r\n<p>You can correct factual errors in your personally identifiable information by sending us a request that credibly shows error.</p>\r\n<p>To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.</p>\r\n<h2><a name=\"Contact\"></a>How To Contact Us</h2>\r\n<p>Should you have other questions or concerns about these privacy policies, please <a href=\"https://www.bdstall.com/contactUs/\"><span style=\"color: #508090;\">contact us</span>.</a></p>\r\n</div>', '2020-08-11 19:41:56', '2020-08-16 17:09:25', 1),
(3, 'Md. Abdur', 'fdgasfgasfdgafg-fgggggggggggggggg', 1, '<div class=\"page-content\">\r\n<div class=\"container-fluid\">\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<div class=\"page-title-box d-flex align-items-center justify-content-between\">\r\n<h4 class=\"mb-0\">LIGHTBOX</h4>\r\n<div class=\"page-title-right\">\r\n<ol class=\"breadcrumb m-0\">\r\n<li class=\"breadcrumb-item\"><a>UI Elements</a></li>\r\n<li class=\"breadcrumb-item active\">Lightbox</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-xl-6\">\r\n<div class=\"card\">\r\n<div class=\"card-body\">\r\n<h4 class=\"card-title\">Single image lightbox</h4>\r\n<p class=\"card-title-desc\">Three simple popups with different scaling settings.</p>\r\n<div class=\"row\">\r\n<div class=\"col-6\">\r\n<div>\r\n<h5 class=\"mt-0 font-size-14\">Fits (Horz/Vert)</h5>\r\n<a class=\"image-popup-vertical-fit\" title=\"Caption. Can be aligned it to any side and contain any HTML.\" href=\"assets/images/small/img-2.jpg\"><img class=\"img-fluid\" src=\"assets/images/small/img-2.jpg\" alt=\"\" width=\"145\" /></a></div>\r\n</div>\r\n<div class=\"col-6\">\r\n<div>\r\n<h5 class=\"mt-0 font-size-14\">Effects</h5>\r\n<a class=\"image-popup-no-margins\" href=\"assets/images/small/img-3.jpg\"><img class=\"img-fluid\" src=\"assets/images/small/img-3.jpg\" alt=\"\" width=\"75\" /></a>\r\n<p class=\"mt-2 mb-0 text-muted\">No gaps, zoom animation, close icon in top-right corner.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xl-6\">\r\n<div class=\"card\">\r\n<div class=\"card-body\">\r\n<h4 class=\"card-title\">Lightbox gallery</h4>\r\n<p class=\"card-title-desc\">In this example lazy-loading of images is enabled for the next image based on move direction.</p>\r\n<div class=\"popup-gallery\">\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-1.jpg\" alt=\"\" width=\"120\" /></div>\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-2.jpg\" alt=\"\" width=\"120\" /></div>\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-3.jpg\" alt=\"\" width=\"120\" /></div>\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-4.jpg\" alt=\"\" width=\"120\" /></div>\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-5.jpg\" alt=\"\" width=\"120\" /></div>\r\n<div class=\"img-fluid\"><img src=\"assets/images/small/img-6.jpg\" alt=\"\" width=\"120\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-xl-6\">\r\n<div class=\"card\">\r\n<div class=\"card-body\">\r\n<h4 class=\"card-title\">Zoom Gallery</h4>\r\n<p class=\"card-title-desc\">Zoom effect works only with images.</p>\r\n<div class=\"zoom-gallery\"><a class=\"float-left\" title=\"Project 1\" href=\"assets/images/small/img-3.jpg\"><img src=\"assets/images/small/img-3.jpg\" alt=\"\" width=\"275\" /></a><a class=\"float-left\" title=\"Project 2\" href=\"assets/images/small/img-7.jpg\"><img src=\"assets/images/small/img-7.jpg\" alt=\"\" width=\"275\" /></a></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-xl-6\">\r\n<div class=\"card\">\r\n<div class=\"card-body\">\r\n<h4 class=\"card-title\">Popup with video or map</h4>\r\n<p class=\"card-title-desc\">In this example lazy-loading of images is enabled for the next image based on move direction.</p>\r\n<div class=\"row\">\r\n<div class=\"col-12\">\r\n<div class=\"button-items\"><a class=\"popup-youtube btn btn-light mo-mb-2\" href=\"https://www.youtube.com/watch?v=0O2aH4XLbto\">Open YouTube Video</a>&nbsp;<a class=\"popup-vimeo btn btn-light mo-mb-2\" href=\"https://vimeo.com/45830194\">Open Vimeo Video</a>&nbsp;<a class=\"popup-gmaps btn btn-light mo-mb-2\" href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\">Open Google Map</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"card\">\r\n<div class=\"card-body\">\r\n<h4 class=\"card-title mb-4\">Popup with form</h4>\r\n<div><a class=\"popup-form btn btn-primary\" href=\"#test-form\">Popup form</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<footer class=\"footer\">\r\n<div class=\"container-fluid\">\r\n<div class=\"row\">&nbsp;</div>\r\n</div>\r\n</footer>', '2020-08-16 17:09:52', '2020-08-16 17:10:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Client', 'client', NULL, NULL),
(3, 'Admin', 'admin', NULL, NULL),
(4, 'Client', 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `head_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `foo_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://fb.me',
  `instra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://instragram.com',
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://youtube.com',
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.pinterest.com/',
  `faq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `career` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Copyright © PCHUTBD.com',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'favicon.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `head_img`, `foo_img`, `fb`, `instra`, `youtube`, `pinterest`, `faq`, `contact`, `career`, `privacy`, `terms`, `app`, `copyright`, `created_at`, `updated_at`, `favicon`) VALUES
(1, 'PC HUT BD', 'pc-hut-bd5f3995e22a92e-2020-08-17-5f3995e22a938.png', 'pc-hut-bd5f3995e22a92e-2020-08-17-5f3995e230f8a.png', 'https://fb.me', 'https://instragram.com', 'https://youtube.com', 'https://www.pinterest.com/', '#', '#', '#', '#', '#', '#', 'Copyright © PCHUTBD.com', '2020-08-15 19:30:26', '2020-08-16 20:24:02', 'pc-hut-bd5f3995e22a92e-2020-08-17-5f3995e239d56.jpg'),
(2, 'PC HUT BD', 'pc-hut-bd5f399311e7001-2020-08-17-5f399311e7007.jpg', 'pc-hut-bd5f399311e7001-2020-08-17-5f39931206cbe.jpg', 'https://fb.me', 'https://instragram.com', 'https://youtube.com', 'https://www.pinterest.com/', '#', '#', '#', '#', '#', '#', 'Copyright © PCHUTBD.com', '2020-08-16 20:12:02', '2020-08-16 20:12:02', 'pc-hut-bd5f399311e7001-2020-08-17-5f3993120b075.png');

-- --------------------------------------------------------

--
-- Table structure for table `stalls`
--

CREATE TABLE `stalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `item_limit` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `item_exp` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Bangladesh',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'picture.jpg',
  `postcode` int(11) DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stalls`
--

INSERT INTO `stalls` (`id`, `user_id`, `item_limit`, `status`, `item_exp`, `type`, `name`, `slug`, `phone`, `email`, `web`, `fax`, `person_name`, `hotline1`, `hotline2`, `business`, `address`, `area`, `city`, `country`, `img`, `postcode`, `about`, `created_at`, `updated_at`, `plan`) VALUES
(1, 2, 50, 1, '2020-08-31', 'sddddddd', 'afser rohman', 'zngfnnzfg', '+8801685417131', 'rahimbd@gmail.com', NULL, NULL, 'Abdur Rahim', '01685417131', '01833937337', 'Business', 'narayngonj\r\nmonsigonj', 'kazla', 'Dhaka', 'Bangladesh', 'afser-rohman5f2ed57acc253-2020-08-08-jpg', 1236, 'Abdur Rahim discription', '2020-08-31 16:38:55', '2020-08-16 21:36:35', 'Gold'),
(2, 4, 1, 0, NULL, 'Business', 'TronixBD.Com', 'tronixbdcom-5f39a12029797', '+8801685417131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jatrabari', NULL, 'Dhaka', 'Bangladesh', 'picture.jpg', NULL, NULL, '2020-08-16 21:12:00', '2020-08-16 21:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `Category_id`, `slug`, `img`, `status`, `created_at`, `updated_at`) VALUES
(2, 'All Cow', 2, 'all-cow', 'all-cow-2020-08-08-5f2d9fa2a0bce-png', 1, '2020-08-07 18:38:26', '2020-08-07 18:38:26'),
(3, 'TronixBD', 2, 'tronixbd', 'tronixbd-2020-08-11-5f318e8702d31-png', 1, '2020-08-10 18:14:31', '2020-08-10 18:14:31'),
(4, 'rohman', 2, 'rohman', 'rohman-2020-08-11-5f318eab59176-png', 1, '2020-08-10 18:15:07', '2020-08-10 18:15:07'),
(5, 'Gaming Pc', 3, 'gaming-pc', 'gaming-pc-2020-08-11-5f318eec5ec22-jpg', 1, '2020-08-10 18:16:12', '2020-08-10 18:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `is_seller` tinyint(1) NOT NULL DEFAULT 0,
  `seller_req` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_seller`, `seller_req`, `name`, `email`, `email_verified_at`, `phone`, `password`, `img`, `gender`, `address`, `city`, `country`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 'Abdur Rahim', 'rahimbanglainc@gmail.com', NULL, '016854171311', '$2y$10$mrY8pWSr9sAJEqWPWWIMdu/..SEWd12d9qtCwqGCiYvFLgjLLTIxa', '2020-08-17-5f39dfd4e7e8b.jpg', 'male', 'jatrabari', 'Comilla', 'Bangladesh', NULL, 'CklBrIhHLKSOviY3pBrSIOCunf6kmI3GyCzGEqMgkin0tDtcjzlxbKoXysfK', NULL, '2020-08-17 01:39:32'),
(2, 2, 1, 1, 'Md. Abdur Rahim Sarkar', 'rahimbd623@gmail.com', NULL, '01833937997', '$2y$10$YK1BRfC/X6T8xc2nEvml9eueTI.OKxECuoDUbRlaQVhumd1w.8kvi', '2020-07-31-5f23559540c98.jpg', 'Male', 'Jatrabari,dhaka', 'Dhaka', 'Bangladesh', NULL, 'JECwS7FtZx2OfO60kSm0N46ObQQfgeBvt8SK9p5INy8Tioe8h4hRu4jJN7ky', '2020-06-30 21:52:26', '2020-08-07 18:55:49'),
(3, 2, 0, 0, 'Nayeem Sarkar', 'test@gmail.com', NULL, '+8801685417131', '$2y$10$zmZ5/G1O//GkYFC7O.goFu1StmTPpFn2izVae0txIM9ytsKRrGJn6', 'user.jpg', 'male', 'Jatrabari', 'Dhaka', 'Bangladesh', NULL, NULL, '2020-08-02 22:25:48', '2020-08-17 01:27:06'),
(4, 2, 0, 1, 'Abdur Rahim', 'rahimbd@gmail.com', NULL, NULL, '$2y$10$hZS2OeAJn3IPEP6hKQT.A.YdMf1ZofmVi7v8hAO4XQdigYqgKA21u', 'user.jpg', 'male', NULL, NULL, NULL, NULL, NULL, '2020-08-16 21:01:45', '2020-08-16 21:12:00'),
(5, 2, 0, 0, 'sarkar', 'tronixbd@gmail.com', NULL, '01685417131', '$2y$10$xnt5VxChDiuyHQY5SzosSuNW.t4z3qHJc/AukH.eSvhrUoNMqVesq', '2020-08-17-5f39dd058a1cf.jpg', 'Male', 'Jatrabarisdg', 'Comilla', 'Others', NULL, NULL, '2020-08-17 01:27:36', '2020-08-17 01:30:22'),
(6, 2, 0, 0, 'info@tronixbd.com', 'info@tronixbd.com', NULL, '09638574903', '$2y$10$YUEPjFelxRpRQvaTQZuNEeCumVA1O1MSQl/3t3UIB8oDgkILaa2RG', '2020-08-17-5f39e0016b7b0.jpg', 'Male', 'KawranBazar', 'Dhaka', 'Bangladesh', NULL, NULL, '2020-08-17 01:40:17', '2020-08-17 01:40:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `feature_values`
--
ALTER TABLE `feature_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_values_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_values_item_id_foreign` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_stall_id_foreign` (`stall_id`);

--
-- Indexes for table `item_user`
--
ALTER TABLE `item_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_user_item_id_foreign` (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stalls`
--
ALTER TABLE `stalls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stalls_user_id_foreign` (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD KEY `subcategories_category_id_foreign` (`Category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feature_values`
--
ALTER TABLE `feature_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `item_user`
--
ALTER TABLE `item_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stalls`
--
ALTER TABLE `stalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_values`
--
ALTER TABLE `feature_values`
  ADD CONSTRAINT `feature_values_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feature_values_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_stall_id_foreign` FOREIGN KEY (`stall_id`) REFERENCES `stalls` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `item_user`
--
ALTER TABLE `item_user`
  ADD CONSTRAINT `item_user_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stalls`
--
ALTER TABLE `stalls`
  ADD CONSTRAINT `stalls_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`Category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
