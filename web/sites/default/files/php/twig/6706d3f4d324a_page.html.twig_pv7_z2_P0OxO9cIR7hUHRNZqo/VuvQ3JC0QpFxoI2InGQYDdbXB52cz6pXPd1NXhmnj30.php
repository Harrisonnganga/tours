<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/city_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_3508f45ad46d5927b2e7c981d6422f4c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "
<!-- Start: Top Bar -->

<div class=\"container\">

  ";
        // line 102
        yield "  <!-- End: Top Bar -->


  <!-- Start: Header -->

  <div class=\"header\">
    <div class=\"container-\">
      <div class=\"row\">
        <div class=\"navbar-header col-md\">
          ";
        // line 111
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111)) {
            // line 112
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 114
        yield "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 117)) {
            // line 118
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 120
        yield "        </div>
      </div>
    </div>
  </div>
  <!-- End: Header -->


  <!-- Start: Slides -->
  ";
        // line 128
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 129
            yield "    <div class=\"container-\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 133
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 133, $this->source));
                yield "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['slider_contents'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "        </ul>
      </div>
    </div>
  ";
        }
        // line 139
        yield "  <!-- End: Slides -->

  <div class=\"regions-group-\">

    ";
        // line 143
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 143) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 143))) {
            // line 144
            yield "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 146)) {
                // line 147
                yield "            <div class=\"col-sm-4 block-image\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_image", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 149
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 149)) {
                // line 150
                yield "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 151
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock1_desc", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
                yield "</div>
            </div>
          ";
            }
            // line 154
            yield "        </div>
      </div>
    ";
        }
        // line 157
        yield "  
    ";
        // line 158
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 158) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 158))) {
            // line 159
            yield "      <div class=\"topblock regions-group\">
        <div class=\"row topwidget-list clearfix\">
          ";
            // line 161
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 161)) {
                // line 162
                yield "            <div class=\"col-sm block-content-wrap\">
              <div class=\"block-content\">";
                // line 163
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_desc", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                yield "</div>
            </div>
          ";
            }
            // line 166
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 166)) {
                // line 167
                yield "            <div class=\"col-sm-4 block-image\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topblock2_image", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 169
            yield "        </div>
      </div>
    ";
        }
        // line 172
        yield "
  </div>

      
  <!--Start: Highlighted -->
  ";
        // line 177
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 177)) {
            // line 178
            yield "    <div class=\"highlighted\">
      <div class=\"container-\">
        ";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 184
        yield "  <!--End: Highlighted -->


  <!--Start: Top Message -->
  ";
        // line 188
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 188)) {
            // line 189
            yield "    <div class=\"container-\">
      <div class=\"top-message\">
        ";
            // line 191
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_message", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 195
        yield "  <!--End: Top Message -->


  <!--Start: Title -->
  ";
        // line 199
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 199) &&  !($context["is_front"] ?? null))) {
            // line 200
            yield "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <div class=\"container-\">
          ";
            // line 203
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>
  ";
        }
        // line 208
        yield "  <!--End: Title -->


  <div class=\"main-content regions-group\">
    <div class=\"container-\">
      <div class=\"\">
        <!--Start: Breadcrumb -->
        ";
        // line 215
        if ( !($context["is_front"] ?? null)) {
            // line 216
            yield "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 217
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
            yield "</div>
          </div>
        ";
        }
        // line 220
        yield "        <!--End: Breadcrumb -->
        <div class=\"row layout\">
          <!--- Start: Left SideBar -->
          ";
        // line 223
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 223)) {
            // line 224
            yield "            <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 224, $this->source), "html", null, true);
            yield ">
              <div class=\"sidebar\">
                ";
            // line 226
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          ";
        }
        // line 230
        yield "          <!-- End Left SideBar -->
          <!--- Start Content -->
          ";
        // line 232
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 232)) {
            // line 233
            yield "            <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 233, $this->source), "html", null, true);
            yield ">
              <div class=\"content_layout\">
                ";
            // line 235
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            yield "
              </div>              
            </div>
          ";
        }
        // line 239
        yield "          <!-- End: Content -->
          <!-- Start: Right SideBar -->
          ";
        // line 241
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 241)) {
            // line 242
            yield "            <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 242, $this->source), "html", null, true);
            yield ">
              <div class=\"sidebar\">
                ";
            // line 244
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          ";
        }
        // line 248
        yield "          <!-- End: Right SideBar -->
        </div>
      </div>
    </div>
  </div>
  <!-- End: Main content -->


  ";
        // line 256
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 256)) {
            // line 257
            yield "    <div class=\"products regions-group\">
      ";
            // line 258
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 261
        yield "

  <!-- Start: Features -->
  ";
        // line 264
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 264) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 264)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 264))) {
            // line 265
            yield "    <div class=\"features regions-group\">
      <div class=\"container-\">
        ";
            // line 267
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 267)) {
                // line 268
                yield "          <h2 class=\"custom-block-title\" >
            ";
                // line 269
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                yield "
          </h2>
        ";
            }
            // line 272
            yield "        <div class=\"row features-list\">
          ";
            // line 273
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 273)) {
                // line 274
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 274, $this->source), "html", null, true);
                yield ">
              ";
                // line 275
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 278
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 278)) {
                // line 279
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 279, $this->source), "html", null, true);
                yield ">
              ";
                // line 280
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 283
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 283)) {
                // line 284
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 284, $this->source), "html", null, true);
                yield ">
              ";
                // line 285
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 288
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 292
        yield "  <!--End: Features -->


  <!-- Start: Footer widgets -->
  ";
        // line 296
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 296) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 296)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 296))) {
            // line 297
            yield "    <div class=\"footer regions-group\" id=\"footer\">
      <div class=\"container-\">
        ";
            // line 299
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 299)) {
                // line 300
                yield "          <h2 class=\"custom-block-title\" >
            ";
                // line 301
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                yield "
          </h2>
        ";
            }
            // line 304
            yield "        <div class=\"row\">
          ";
            // line 305
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 305)) {
                // line 306
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 306, $this->source), "html", null, true);
                yield ">
              ";
                // line 307
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 307), 307, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 310
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 310)) {
                // line 311
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 311, $this->source), "html", null, true);
                yield ">
              ";
                // line 312
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 312), 312, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 315
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 315)) {
                // line 316
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 316, $this->source), "html", null, true);
                yield ">
              ";
                // line 317
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 320
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 324
        yield "  <!--End: Footer widgets -->


  <!-- Start: Copyright -->
  <div class=\"copyright regions-group\">
    <div class=\"container-\">
      <span>Copyright © ";
        // line 330
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". All rights reserved.</span>
      ";
        // line 331
        if (($context["show_credit_link"] ?? null)) {
            // line 332
            yield "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 334
        yield "    </div>
  </div>
  <!-- End: Copyright -->

</div>





";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "show_slideshow", "slider_content", "sidebarfirst", "contentlayout", "sidebarsecond", "features_first_class", "features_class", "footer_class", "show_credit_link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/city_zymphonies_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  512 => 334,  508 => 332,  506 => 331,  502 => 330,  494 => 324,  488 => 320,  482 => 317,  477 => 316,  474 => 315,  468 => 312,  463 => 311,  460 => 310,  454 => 307,  449 => 306,  447 => 305,  444 => 304,  438 => 301,  435 => 300,  433 => 299,  429 => 297,  427 => 296,  421 => 292,  415 => 288,  409 => 285,  404 => 284,  401 => 283,  395 => 280,  390 => 279,  387 => 278,  381 => 275,  376 => 274,  374 => 273,  371 => 272,  365 => 269,  362 => 268,  360 => 267,  356 => 265,  354 => 264,  349 => 261,  343 => 258,  340 => 257,  338 => 256,  328 => 248,  321 => 244,  315 => 242,  313 => 241,  309 => 239,  302 => 235,  296 => 233,  294 => 232,  290 => 230,  283 => 226,  277 => 224,  275 => 223,  270 => 220,  264 => 217,  261 => 216,  259 => 215,  250 => 208,  242 => 203,  237 => 200,  235 => 199,  229 => 195,  222 => 191,  218 => 189,  216 => 188,  210 => 184,  203 => 180,  199 => 178,  197 => 177,  190 => 172,  185 => 169,  179 => 167,  176 => 166,  170 => 163,  167 => 162,  165 => 161,  161 => 159,  159 => 158,  156 => 157,  151 => 154,  145 => 151,  142 => 150,  139 => 149,  133 => 147,  131 => 146,  127 => 144,  125 => 143,  119 => 139,  113 => 135,  104 => 133,  100 => 132,  95 => 129,  93 => 128,  83 => 120,  77 => 118,  75 => 117,  70 => 114,  64 => 112,  62 => 111,  51 => 102,  44 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/city_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/city_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 111, "for" => 132);
        static $filters = array("escape" => 112, "raw" => 133, "date" => 330);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
