<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use Troccoli\BladeHealthIcons\BladeHealthIconsServiceProvider;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_can_add_classes_to_icons(): void
    {
        $result = svg('healthicons-f-blood-a-n', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9231 10.6154C20.7678 10.2427 20.4037 10 20 10C19.5963 10 19.2322 10.2427 19.0769 10.6154L15.3355 19.5947C15.3294 19.6086 15.3235 19.6226 15.318 19.6368L14.0769 22.6154C13.8645 23.1252 14.1056 23.7107 14.6154 23.9231C15.1252 24.1355 15.7107 23.8944 15.9231 23.3846L16.9167 21H23.0833L24.0769 23.3846C24.2893 23.8944 24.8748 24.1355 25.3846 23.9231C25.8944 23.7107 26.1355 23.1252 25.9231 22.6154L24.682 19.6368C24.6765 19.6226 24.6706 19.6086 24.6645 19.5947L20.9231 10.6154ZM20 13.6L22.25 19H17.75L20 13.6Z" fill="#333333"/>
            <path d="M26 17C26 16.4477 26.4477 16 27 16H33C33.5523 16 34 16.4477 34 17C34 17.5523 33.5523 18 33 18H27C26.4477 18 26 17.5523 26 17Z" fill="#333333"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 34.0306C38 36.2228 36.2091 38 34 38H30V40H25V44H23V40H18V38H14C11.7909 38 10 36.2228 10 34.0306V10.3273C10 8.13507 11.7909 6.3579 14 6.3579H20L21.132 5.20243C22.7027 3.59919 25.2973 3.59919 26.868 5.20243L28 6.3579H34C36.2091 6.3579 38 8.13508 38 10.3273V34.0306ZM26.5714 7.75754C26.9475 8.14152 27.4625 8.3579 28 8.3579H34C35.1191 8.3579 36 9.25408 36 10.3273V27.5388C35.7222 27.3234 35.4135 27.1104 35.0748 26.9133C33.2501 25.8514 30.6105 25.2987 27.4919 27.1387C24.924 28.6538 22.5089 29.0636 19.8818 29.1195C18.711 29.1444 17.5143 29.0991 16.2309 29.0505C16.0559 29.0439 15.8789 29.0372 15.7005 29.0306C14.5326 28.9875 13.3017 28.9498 12 28.971V10.3273C12 9.25408 12.8809 8.3579 14 8.3579H20C20.5375 8.3579 21.0525 8.14151 21.4286 7.75754L22.5607 6.60207C23.3471 5.79931 24.6529 5.79931 25.4393 6.60207L26.5714 7.75754Z" fill="#333333"/>
            </svg>
            SVG;
        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons(): void
    {
        $result = svg('healthicons-f-blood-a-n', ['style' => 'fill: #F00'])->toHtml();

        $expected = <<<'SVG'
            <svg style="fill: #F00" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9231 10.6154C20.7678 10.2427 20.4037 10 20 10C19.5963 10 19.2322 10.2427 19.0769 10.6154L15.3355 19.5947C15.3294 19.6086 15.3235 19.6226 15.318 19.6368L14.0769 22.6154C13.8645 23.1252 14.1056 23.7107 14.6154 23.9231C15.1252 24.1355 15.7107 23.8944 15.9231 23.3846L16.9167 21H23.0833L24.0769 23.3846C24.2893 23.8944 24.8748 24.1355 25.3846 23.9231C25.8944 23.7107 26.1355 23.1252 25.9231 22.6154L24.682 19.6368C24.6765 19.6226 24.6706 19.6086 24.6645 19.5947L20.9231 10.6154ZM20 13.6L22.25 19H17.75L20 13.6Z" fill="#333333"/>
            <path d="M26 17C26 16.4477 26.4477 16 27 16H33C33.5523 16 34 16.4477 34 17C34 17.5523 33.5523 18 33 18H27C26.4477 18 26 17.5523 26 17Z" fill="#333333"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 34.0306C38 36.2228 36.2091 38 34 38H30V40H25V44H23V40H18V38H14C11.7909 38 10 36.2228 10 34.0306V10.3273C10 8.13507 11.7909 6.3579 14 6.3579H20L21.132 5.20243C22.7027 3.59919 25.2973 3.59919 26.868 5.20243L28 6.3579H34C36.2091 6.3579 38 8.13508 38 10.3273V34.0306ZM26.5714 7.75754C26.9475 8.14152 27.4625 8.3579 28 8.3579H34C35.1191 8.3579 36 9.25408 36 10.3273V27.5388C35.7222 27.3234 35.4135 27.1104 35.0748 26.9133C33.2501 25.8514 30.6105 25.2987 27.4919 27.1387C24.924 28.6538 22.5089 29.0636 19.8818 29.1195C18.711 29.1444 17.5143 29.0991 16.2309 29.0505C16.0559 29.0439 15.8789 29.0372 15.7005 29.0306C14.5326 28.9875 13.3017 28.9498 12 28.971V10.3273C12 9.25408 12.8809 8.3579 14 8.3579H20C20.5375 8.3579 21.0525 8.14151 21.4286 7.75754L22.5607 6.60207C23.3471 5.79931 24.6529 5.79931 25.4393 6.60207L26.5714 7.75754Z" fill="#333333"/>
            </svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_compiles_a_single_anonymous_component(): void
    {
        $result = svg('healthicons-f-blood-a-n')->toHtml();

        $expected = <<<'SVG'
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9231 10.6154C20.7678 10.2427 20.4037 10 20 10C19.5963 10 19.2322 10.2427 19.0769 10.6154L15.3355 19.5947C15.3294 19.6086 15.3235 19.6226 15.318 19.6368L14.0769 22.6154C13.8645 23.1252 14.1056 23.7107 14.6154 23.9231C15.1252 24.1355 15.7107 23.8944 15.9231 23.3846L16.9167 21H23.0833L24.0769 23.3846C24.2893 23.8944 24.8748 24.1355 25.3846 23.9231C25.8944 23.7107 26.1355 23.1252 25.9231 22.6154L24.682 19.6368C24.6765 19.6226 24.6706 19.6086 24.6645 19.5947L20.9231 10.6154ZM20 13.6L22.25 19H17.75L20 13.6Z" fill="#333333"/>
            <path d="M26 17C26 16.4477 26.4477 16 27 16H33C33.5523 16 34 16.4477 34 17C34 17.5523 33.5523 18 33 18H27C26.4477 18 26 17.5523 26 17Z" fill="#333333"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 34.0306C38 36.2228 36.2091 38 34 38H30V40H25V44H23V40H18V38H14C11.7909 38 10 36.2228 10 34.0306V10.3273C10 8.13507 11.7909 6.3579 14 6.3579H20L21.132 5.20243C22.7027 3.59919 25.2973 3.59919 26.868 5.20243L28 6.3579H34C36.2091 6.3579 38 8.13508 38 10.3273V34.0306ZM26.5714 7.75754C26.9475 8.14152 27.4625 8.3579 28 8.3579H34C35.1191 8.3579 36 9.25408 36 10.3273V27.5388C35.7222 27.3234 35.4135 27.1104 35.0748 26.9133C33.2501 25.8514 30.6105 25.2987 27.4919 27.1387C24.924 28.6538 22.5089 29.0636 19.8818 29.1195C18.711 29.1444 17.5143 29.0991 16.2309 29.0505C16.0559 29.0439 15.8789 29.0372 15.7005 29.0306C14.5326 28.9875 13.3017 28.9498 12 28.971V10.3273C12 9.25408 12.8809 8.3579 14 8.3579H20C20.5375 8.3579 21.0525 8.14151 21.4286 7.75754L22.5607 6.60207C23.3471 5.79931 24.6529 5.79931 25.4393 6.60207L26.5714 7.75754Z" fill="#333333"/>
            </svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeHealthIconsServiceProvider::class,
        ];
    }
}
