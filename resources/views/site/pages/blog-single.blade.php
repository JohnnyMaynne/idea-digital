@extends('site.layouts.app')


@section('content')
    <x-app.page invert>
        <div class="min-h-hero relative">
            <div class="pt-40 relative z-30">
                <x-app.container>
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center space-x-4">
                            <li>
                                <div class="flex items-center">
                                    <a href="#" class="transition text-sm font-medium text-white hover:text-white/70">Blog</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                    </svg>
                                    <a href="#" class="transition ml-4 text-sm font-medium text-white hover:text-white/70" aria-current="page">Project Nero</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <div class="text-7xl max-w-[900px] max-w-3xl font-bold text-white">
                        Regular Expressions for SEO: How and Where to Use Them?
                    </div>

                    <div class="mt-8 flex items-center space-x-8">
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>
                            <span>Brad Pitt</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <polyline points="12 7 12 12 15 15"></polyline>
                            </svg>
                            <span>12 min</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="2"></circle>
                                <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                            </svg>
                            <span>125 views</span>
                        </div>
                        <div class="font-medium flex items-center space-x-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3"></path>
                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                <line x1="8" y1="13" x2="14" y2="13"></line>
                            </svg>
                            <span>5 comments</span>
                        </div>
                    </div>


                </x-app.container>
            </div>
            <img  class="absolute z-10 left-0 top-0 bottom-0 right-0 w-full h-full object-cover select-none" src="https://unsplash.com/photos/8kg_ySLTxLI/download?ixid=MnwxMjA3fDB8MXx0b3BpY3x8Ym84alFLVGFFMFl8fHx8fDJ8fDE2NDk5NTk3NTM&force=true&w=1920">
            <div class="bg-black opacity-70 absolute z-20 left-0 top-0 w-full h-full"></div>
        </div>


        <x-app.section class="py-10">
            <div class="mx-auto max-w-4xl w-full">
                <div class="p-4 select-none bg-gray-100 rounded-md text-sm space-y-2">
                    <a class="block" href="#heading-1">1. What are Regular Expressions?</a>
                    <a class="block" href="#heading-2">2. Regular Expression basics</a>
                    <a class="block" href="#heading-3">3. Where can an SEO specialist use RegEx?</a>
                    <a class="block" href="#heading-3">4. Examples of using Regex in SEO tools</a>
                    <a class="block" href="#heading-3">5. How to check if a regular expression is correct</a>
                </div>
                <div class="prose min-w-full">
                    <article class="text-content" style="opacity: 1; transform: translateY(0px);"><p dir="ltr">Regular expressions are a useful tool that makes life easier for many SEO specialists.&nbsp;</p><p dir="ltr">Sometimes you come across regular expressions in .htaccess or Google Analytics, and at first, everything seems very confusing, but as soon as you start to understand RegEx, you realize how these constructs make life easier and become a powerful tool for working with data.</p><p dir="ltr">In this blog, we will explain in details what RegEx (Regular Expressions) are, will give examples, and show how to put them into practice. The article will be useful to everyone who is somehow related to data processing in SEO.</p><h2 dir="ltr">What are Regular Expressions?</h2><p dir="ltr">A regular expression (or simply RegExp) is a specific pattern or construction for finding occurrences (of any kind) in a text string.</p><p dir="ltr">Using this language, you can extract some data from the text, for example, phone numbers, email addresses, any pieces of text, and so on.</p><p dir="ltr">RegExp is often used by programmers when checking input data or when coding parsers, but SEO specialists also face regular expressions when working with Google Analytics, RewriteRule in .htaccess, or even in text editors to quickly find and strings replacements.</p><h2 dir="ltr">Regular Expression basics</h2><p dir="ltr">Let's see a popular example of using <a href="https://support.google.com/analytics/answer/1034324?hl=ru">regular expressions&nbsp;</a>to set up a redirect on a site from “non-www” version to the www-domain.</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">RewriteCond %{HTTP_HOST} !^www\.(.*) [NC]</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">RewriteRule ^(.*)$ http://www.%1/$1 [R=301,L]</span></p></blockquote><p dir="ltr">Regular expressions are marked in bold here. What do these dots and other signs mean?</p><p dir="ltr">Looks very confusing. And to understand this, you need to understand the RegExp syntax.</p><p dir="ltr"><strong>"^" - caret, circumflex or just a tick. Line start</strong></p><p dir="ltr">This character is used to indicate the start of a line (unless used within a "[ ]" construction). For example, if you want to find an email message where the subject line starts with the word "buy", the expression would simply be: ^buy. Without this mark, all keywords containing the word "buy" will be found, not necessarily at the start of a line.</p><p dir="ltr">For example, you can use this in advanced Google Analytics filters.</p><p dir="ltr">You may say: why use regular expressions, where you can do without them?&nbsp;</p><p dir="ltr"><a href="https://ideadigitalagency.net/blog/universal-analytics-vs-google-analytics-4-it-worth-switching-updated-analytics/">Google Analytics</a> filters have a "starts with" filter. It is absolutely true, and this example was given only to clarify the syntax, further, we will see that a combination of different constructions solves problems that are difficult to solve without using regular expressions.</p><p dir="ltr"><strong>"$" is the dollar sign. End of line</strong></p><p dir="ltr">Unlike a tick, a dollar signifies the end of a line. It is already clear that the Kyiv$ construction will find all phrases ending with the word "Kyiv".</p><p dir="ltr"><strong>"." - dot. Any character</strong></p><p dir="ltr">The dot stands for any character, but only one. The period itself is rarely used and occurs more often together with other signs, for example, ".*".</p><p dir="ltr"><strong>"*" - multiplication sign, asterisk. Any number of previous characters</strong></p><p dir="ltr">An asterisk defines any number of characters (or groups of characters) that are written before this character, including the absence of this character.&nbsp;</p><p dir="ltr">Together with the previous “dot” character, we get the convenient expression “.*”, which means any number of any characters. For example, the expression</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">RewriteRule ^(.*)$ http://www.%1/$1 [R=301,L]</span></p></blockquote><p dir="ltr">It is already becoming clearer, the expression above is a redirect of any of the pages to a new URL.</p><p dir="ltr"><strong>"+" is a plus sign. Any positive number of previous characters.</strong></p><p dir="ltr">The plus sign is different from the previous “*” sign: the symbol must occur at least once.</p><p dir="ltr"><strong>"?" - question mark. Optional occurrence of last character</strong></p><p dir="ltr">The question mark indicates that the last character or group may or may not occur in the text (that is, their occurrence is not required).</p><p dir="ltr">It is convenient when you don't know, for example, whether there will be a slash at the end of the address or not:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">^/articles/?$</span></p></blockquote><p dir="ltr">Or, for example, when you're looking for keywords and looking for certain misspellings:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">buy a l?dder</span></p></blockquote><p dir="ltr">This expression will find all the keywords where the phrases “buy a ladder” and “buy a ledder” appeared.</p><p dir="ltr"><strong>"( )" - round brackets. Grouping structures.</strong></p><p dir="ltr">Similar to the use in mathematics, parentheses in regular expressions are used for grouping. And further for a group of characters or rules, you can specify other rules.</p><p dir="ltr">For example, we need to redirect all users from the "domain.com/blog/" subfolder to the blog.domain.com subdomain:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">RewriteRule ^blog/(.*)$ http://blog.domain.com/$1 [R=301,L]</span></p></blockquote><p dir="ltr">Here the ^blog/(.*)$ rule means that the address starts with blog/, then some sequence of characters can follow (for example, the address of some blog article).</p><p dir="ltr"><strong>"|" - vertical line. "OR" sign.</strong></p><p dir="ltr">The vertical line indicates the OR operator when we need to list certain options in the search. Let's say we are looking for keywords where the word s"buy" or "purchase" occur:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">buy|purchase</span></p></blockquote><p dir="ltr">Or we want to see statistics for several sections - articles (/articles/) and press releases (/pr/):</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">^/(articles|pr)/</span></p></blockquote><p dir="ltr">Or let's take another example. Suppose we want to close the folders “admin”, “login”, “register” and some others from being indexed by search engines.</p><p dir="ltr">In order not to interfere into the website code, you can do this with a few lines of code in .htaccess using the X-Robots-Tag HTTP header, which is understood by most search engines.</p><blockquote><p dir="ltr"><br></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">Header set X-Robots-Tag "noindex, nofollow"</span></p><p dir="ltr"><br></p></blockquote><p dir="ltr">The most well-known and widely used search engines (Google, Yandex, Bing, DuckDuckGo) understand most disallow directives. But in different countries, local search engines are sometimes used, which may not understand, for example, information about indexing through HTTP headers.</p><p dir="ltr">Before optimizing a site for a particular location, you should find out what search engines local residents use and study the peculiarities of working with them.</p><p dir="ltr"><strong>"[ ]" - square brackets. Any of the listed characters.</strong></p><p dir="ltr">You can list characters in square brackets and one of them may appear in the searched text. If the first character in this construction is "^" (hat/tick), then the expression works the other way around — the character should not match what is listed in brackets.</p><p dir="ltr">In order not to list some popular sequences, such as the entire alphabet or a series of numbers, you can use a range: 0-9 means the range from 0 to 9, a-c is the range of characters from "a" to "c".</p><p dir="ltr">Let's say I want to know how people found the site when looking for guidelines or instructions (articles start with "Top 10..." or "Top 15...").</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">^[0-9]+</span></p></blockquote><p dir="ltr"><strong>"{ }" - curly brackes. Repeating a character multiple times.</strong></p><p dir="ltr">Curly brackets are used to specify exactly how many times a character or group of characters should occur. If two numbers are indicated in brackets, separated by a comma, then this will be the interval "from and to".</p><p dir="ltr">For example, to find a zip code in text that is 6 digits long and starts with 14, you can use the following regular expression.</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">14[0-9]{4}</span></p></blockquote><p dir="ltr">Here we have indicated 14, and then a sequence of numbers repeated 4 times, the total length will be 6.</p><p dir="ltr">More complex example:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">www\.domain\.[a-z]{2,6}</span></p></blockquote><p dir="ltr">This expression finds all domain zones, the main domain, including www.domain.ua and www.domain.travel.</p><p dir="ltr">An even more complex example — we need data for 2, 3 and 4 words separately. To do this, in Google Analytics, in the keyword report, we use the filter:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">^[^\s]+(\s[^\s]+){2}$</span></p></blockquote><p dir="ltr">The character "s" means a space, it is used to separate words. Here, [^s]+ indicates that the phrase must start with any number of non-spaces, followed by a space, and another word.</p><p dir="ltr">The last two rules “space + word” can occur exactly 2 times (“( ){2}” construction). This is how we get a list of all 3-word phrases and data on them.</p><p dir="ltr"><strong>"\" is a backslash. Screening service characters.</strong></p><p dir="ltr">Regular Expression syntax uses periods, question marks, and other characters that may also be of interest to search. In this case, the backslash sign helps.&nbsp;</p><p dir="ltr">For example, to search for a dot, we screen it — &nbsp;"\.", the same with other signs.</p><p dir="ltr">For example, in Google Analytics, we set up one of the goals — the use of internal search.</p><p dir="ltr">A person uses search if we see "/?q=" in the URL.</p><p dir="ltr" style="text-align: center;"><img src="/storage/app/media/uploaded-files/Where%20can%20an%20SEO%20specialist%20use%20RegEx_.png" style="width: 70%;box-shadow: 0px 30px 30px -15px rgba(0, 0, 0, 0.15);" class="fr-fic fr-dib" data-result="success" alt="Where can an SEO specialist use RegEx"></p><p dir="ltr">In the settings it looks like this: "/\?q\=".</p><p>There are other characters for operating with regular expressions, a complete list can be found on <a href="https://en.wikipedia.org/wiki/Regular_expression">Wikipedia</a>. But the above should be enough for the basic tasks of an SEO specialist.</p><h2 dir="ltr">Where can an SEO specialist use RegEx?</h2><h3 dir="ltr">Google Analytics</h3><p dir="ltr">Google Analytics is considered one of the main SEO tools.</p><p dir="ltr">Google Analytics supports regular expressions, which allows you to create more flexible definitions for filters, goals, segments, audiences, content groups, channel groups, and more.</p><p dir="ltr">Very often, analyzing the behavior and paths of users on the website helps to find new and effective <a href="https://ideadigitalagency.net/seo-promotion/">SEO methods for website promotion</a>. RegEx can be used to segment the most popular pages and then analyze the popularity of groups of pages.</p><p dir="ltr">For example, using RegEx to segment pages allows you to analyze traffic and bounce rate based on content types on a much larger scale than using traditional filters.</p><h3 dir="ltr">Google Search Console</h3><p dir="ltr">Determining user intent is an important task for an SEO specialist, and regular expressions help to segment data by the main intent of users, that is, to determine the reason why someone is looking for something. This is an important component of any digital marketing strategy.</p><p dir="ltr">RegEx is most commonly used for branded and non-branded analysis. By using RegEx to specify patterns and match, data can be segmented in a couple of clicks.</p><p dir="ltr">RegEx patterns can be used to segment your audience based on what they were thinking and searching for when they found your website.</p><p dir="ltr">They can also be used to divide URLs with RegEx filters so you can understand where the traffic is going and what is driving it. The intent of customers who find a website is consistent with pages they land on.</p><h3 dir="ltr">Rankings</h3><p dir="ltr">RegEx can be used to segment ranking data based on page types for the highest ranked URL for a keyword.</p><p dir="ltr">Using the same RegEx patterns as in GSC is possible to analyze rankings by keyword segments, for example how SERPs show rankings for branded and non-branded keywords.</p><h3 dir="ltr">Website audit in crawlers</h3><p dir="ltr">RegEx can be used to create patterns that help match a string or text. When auditing a site, it can be used to:</p><ul><li aria-level="1" dir="ltr"><p dir="ltr">Segmentation of crawled pages based on URL patterns to control crawl analysis for a large group of pages on a corporate site.</p></li><li aria-level="1" dir="ltr"><p dir="ltr">Search for text from websites when crawling.</p></li></ul><h3 dir="ltr">Log analysis</h3><p dir="ltr">Regular expressions also help parse the crawl files of your site by search bots.&nbsp;</p><p dir="ltr">Log files are usually broken down and parsed based on the User-Agent for different search engine bots.</p><p dir="ltr">Since log files for large sites can contain a large number of pages, using RegEx patterns to segment crawled URLs simplifies general analysis and allows filtering based on complex criteria.</p><h2 dir="ltr">Examples of using Regex in SEO tools</h2><ol><li aria-level="1" dir="ltr"><p dir="ltr"><strong>An example of using regular expressions in Google Search Console</strong></p></li></ol><p dir="ltr">For example, we are looking for all mentions of coronavirus in queries:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">(?i)([ck]ovid|coron[ao]\s?virus)</span></p></blockquote><p dir="ltr">This query will find all matches, case insensitive, of the following phrases kovid, covid, coronavirus, coronovirus, corona virus, corono virus.</p><p dir="ltr">Or we are looking for what queries users use to find a gastronomy establishment called fairy house:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">(?i)(cafe|restaurant|bar)\s(f[ae]ir[yi]|fe[ij]ri|fabulous)\s?(h[ao]u[sz]e*|how[sz] |house)</span></p></blockquote><p dir="ltr">With this query, we will find a bunch of variations of the name from a fairy house bar or a fairy house cafe to a fairy house restaurant, taking into account various possible user errors.</p><p dir="ltr">The enumeration of characters in brackets [ ] goes alphabetically. In the example above, [зс] will work correctly, but [сз] will select only options with the letter “s”.</p><ol start="2"><li aria-level="1" dir="ltr"><p dir="ltr"><strong>Example of use in Google Analytics</strong></p></li></ol><p dir="ltr">For example, if you want to exclude statistics about visits to your site by your employees, you can set up a regular expression filter for the view, which will determine all the IP addresses of the company.&nbsp;</p><p dir="ltr">Let's say this is the IP range 198.51.100.1 — 198.51.100.25. To avoid entering each of the 25 IP addresses, create a regular expression like 198\.51\.100\.\d* to match the entire range.</p><p dir="ltr">If you need a filter that only includes campaign data from two cities, you can create a regular expression like Dnipro|Kyiv (Dnipro or Kyiv).</p><ol start="3"><li aria-level="1" dir="ltr"><p dir="ltr"><strong>Disallowing the WordPress admin panel in .htaccess, opening it for your IP address only</strong></p></li></ol><blockquote><p dir="ltr"><br></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">Order Deny, Allow</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">Deny from All</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">Allow from 200.20.21.145</span></p><p dir="ltr"><br></p></blockquote><p dir="ltr">Where 200.20.21.145 is, for example, your IP address.</p><ol start="4"><li aria-level="1" dir="ltr"><p dir="ltr"><strong>Highlighting non-branded search traffic</strong></p></li></ol><p dir="ltr">Let's say you have an online store called "goodshop.com". Through Google Analytics, you would like to separate search traffic for queries that do not contain your store name from branded search traffic.</p><p dir="ltr">Tracking the dynamics of changes in unbranded traffic is one way to evaluate the effectiveness of website SEO measures.&nbsp;</p><p dir="ltr">To solve this problem, you can create a personalized report in Google Analytics with an assigned filter that will filter out branded queries.&nbsp;</p><p dir="ltr">There can be a lot of different spellings for your store name (don't forget about typos and incorrect keyboard layout). Using a regular expression will eliminate the need to multiply the filter fields for each of the options.</p><p dir="ltr">Regular expression</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">goodshop|goodshop|good shop|good shop|good-shop|pschwyrschz</span></p></blockquote><p dir="ltr">Special signs used:</p><p dir="ltr">| - the symbol enables the operator OR</p><p dir="ltr">When forming this regular expression, we simply list all the main possible queries related to the name of your store in order to exclude them from the report. And don't forget to set the match type to "Regular Expression" in the filter settings.</p><p dir="ltr" style="text-align: center;"><img src="/storage/app/media/uploaded-files/How%20to%20use%20RegEx%20for%20SEO.png" style="width: 100%;box-shadow: 0px 30px 30px -15px rgba(0, 0, 0, 0.15);" class="fr-fic fr-dib" data-result="success" alt="How to use RegEx for SEO"></p><p style="margin-left: 20px;">5. <strong>Choose a specific category of pages on the site</strong></p><p dir="ltr">Sometimes, when studying statistics on the interaction of visitors with the content of the site, it is necessary to select a certain group of pages for analysis.&nbsp;</p><p dir="ltr">For example, compare page engagement rates from a particular section of the directory. Suppose we have a website selling various electronic gadgets.&nbsp;</p><p dir="ltr">The site has a section on mobile phones with a three-level hierarchy:</p><p dir="ltr">- 1st level — the main page of the subdirectory on mobile phones:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/</span></p></blockquote><p dir="ltr">- 2nd level - collected mobile phones of certain brands:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/apple</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/samsung</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/htc</span></p></blockquote><p dir="ltr">- 3rd level - directly product cards:</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/apple/iphone5</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/samsung/galaxys3</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/catalog/mobile/htc/desirev</span></p></blockquote><p dir="ltr">We need to highlight only products pages in the Google Analytics content report.</p><p dir="ltr">Regular expression</p><p dir="ltr">/catalog/mobile/.+/.+</p><p dir="ltr">Special signs used:</p><p dir="ltr">. — stands for any character: punctuation mark, letter, number.</p><p dir="ltr">+ — indicates the number of repetitions of the previous character for 1 time or more.</p><p dir="ltr">In this case, the combination of special characters .+ denotes any string consisting of at least one arbitrary character. With a clear site structure, we know that the product card URL consists of four fragments separated by a slash.</p><p dir="ltr">We only need to specify the first two of them explicitly in the regular expression, since we only need pages from the section on mobile phones.</p><p dir="ltr">At the same time, we know that the product card of a mobile phone certainly contains two more parts: brand and model. We set them by using two combinations of .+, separated by a slash.</p><p dir="ltr">Thus, we have defined a template for the address of the product card page, which we copy into the report filter field.</p><p dir="ltr" style="margin-left: 20px;">6. <strong>Tracking of actions and conversions on a website</strong></p><p dir="ltr">Sometimes regular expressions can come in handy when setting goals in Google Analytics.&nbsp;</p><p dir="ltr">Let's take as an example a website of a foreign language school that offers its students courses in four foreign languages. The site has an application form that visitors can submit indicating a foreign language to learn.</p><p dir="ltr">At the same time, visitors can choose more than one language as the desired language to learn. The project management sets itself the task of finding out how often visitors choose more than one language.&nbsp;</p><p dir="ltr">Accordingly, we need to set up a goal in Google Analytics. After submitting the form, a page with one of the following URLs is displayed.</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">/order?lang=eng</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/order?lang=eng&amp;esp</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/order?lang=eng&amp;esp&amp;ita</span></p><p dir="ltr"><span style="color: rgb(124, 112, 107);">/order?lang=eng&amp;esp&amp;ita&amp;fra</span></p></blockquote><p dir="ltr">Obviously, in the goal settings, you need to specify a regular expression that will match the last three URLs.</p><p dir="ltr">Regular expression</p><blockquote><p dir="ltr"><span style="color: rgb(124, 112, 107);">/order\?lang=.{3}&amp;</span></p></blockquote><p dir="ltr">Special signs used:</p><p dir="ltr">{ } - in curly brackets, you can specify the number of repetitions of the previous character. Accordingly, the combination of characters .{3} denotes a sequence of any three characters.&nbsp;</p><p dir="ltr">In our case, three characters are the designation of the language. Don't forget to screen the question mark, which is also a special character in regular expressions.</p><p dir="ltr">Thus, the regular expression will match all URLs that have three characters after the “equal” sign followed by an ampersand. These pages are displayed when more than one language is specified in the submitted form. Which is what needed to be tracked.</p><h2 dir="ltr">How to check if a regular expression is correct</h2><p dir="ltr">In order to avoid errors when using regular expressions, you can test them before implementation by applying an advanced filter in any analytics reports.</p><p dir="ltr">You can also check regular expressions on a test set using special tools. We recommend using the <a href="https://www.regexpal.com/">Regex Pal&nbsp;</a>website or the <a href="https://chrome.google.com/webstore/detail/regexp-tester/fekbbmalpajhfifodaakkfeodkpigjbk?hl=uk">RegExp Tester</a> browser extension.</p><p dir="ltr">For those who are just starting to learn regular expressions, as well as for experienced professionals who want to test their skills in using RegEx, we highly recommend visiting <a href="https://rubular.com/">this website</a>. Here you can practice writing regular expressions in a playful way.</p></article>
                </div>
            </div>
        </x-app.section>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="border-t pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Recent publications</h2>
                    <p class="mt-3  text-gray-500 sm:mt-4">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                </div>
                <div class="mt-8 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800"> Article </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
                            <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Paul York</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Paul York </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 6 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800"> Video </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
                            <p class="mt-3 text-base text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Dessie Ryan</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Dessie Ryan </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 4 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <a href="#" class="inline-block">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800"> Case Study </span>
                            </a>
                        </div>
                        <a href="#" class="block mt-4">
                            <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
                            <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab iure iusto fugiat commodi sequi.</p>
                        </a>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Easer Collins</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#"> Easer Collins </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12"> Feb 12, 2020 </time>
                                    <span aria-hidden="true"> &middot; </span>
                                    <span> 11 min read </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-app.page>
@endsection
