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

/* modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-formatter.html.twig */
class __TwigTemplate_cb1378eda309de1ec9d59053cff4b941 extends Template
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
        // line 1
        if (($context["is_empty"] ?? null)) {
            // line 2
            yield "<div class=\"lpb-enable__empty-message__wrapper\">
  <div class=\"lpb-enable__empty-message\">
    <p>
      You haven't created any ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_label"] ?? null), 5, $this->source), "html", null, true);
            yield " yet.
      <a class=\"lpb-enable-button use-ajax\" href=\"";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 6, $this->source), "html", null, true);
            yield "\">";
            yield t("Start creating @field_label.", array("@field_label" => ($context["field_label"] ?? null), ));
            yield "</a>
    </p>
  </div>
</div>
";
        } else {
            // line 11
            yield "<div class=\"lpb-enable__wrapper\">
  <div class=\"lpb-enable\">
    <div class=\"lpb-enable__button\"><a class=\"lpb-enable-button use-ajax\" href=\"";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_url"] ?? null), 13, $this->source), "html", null, true);
            yield "\"><span>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 13, $this->source), "html", null, true);
            yield "</span></a></div>
  </div>
</div>
";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["root_components"] ?? null), 16, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_empty", "field_label", "link_url", "link_text", "root_components"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-formatter.html.twig";
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
        return array (  77 => 16,  69 => 13,  65 => 11,  55 => 6,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-formatter.html.twig", "/var/www/html/web/modules/contrib/layout_paragraphs/templates/layout-paragraphs-builder-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "trans" => 6);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
