<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/layouts/main-layout.htm */
class __TwigTemplate_27411b08e849e7cdfa22574d453e25e4702909590fbd6cfd0f52c21b7aee004f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"hu\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
        <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
        <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/branding/tinnye-favicon.png");
        echo "\" />

        <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/main.min.css"));
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "
    </head>

    <body>

        <div class=\"site-wrapper\">

            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all-pages/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "            </header>

            <!-- Content -->
            <section id=\"layout-content\">
                <div class=\"container white\">
                    <!-- ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " -->
                    ";
        // line 32
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 33
        echo "                </div><!-- container -->
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all-pages/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "                <!-- ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all-pages/styleguide"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " -->
                <!-- ";
        // line 40
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("social"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo " -->
            </footer>

        </div>  <!-- site-wrapper -->

    <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras"));
        // line 49
        echo "\"></script>

    <!-- vendor scripts and scripts init -->
    ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 54
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/layouts/main-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  128 => 53,  124 => 52,  119 => 49,  117 => 45,  107 => 40,  100 => 39,  96 => 38,  89 => 33,  87 => 32,  83 => 31,  76 => 26,  72 => 25,  61 => 16,  58 => 15,  54 => 14,  49 => 12,  45 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"hu\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
        <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
        <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
        <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
        <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/branding/tinnye-favicon.png'|theme }}\" />

        <link href=\"{{ ['assets/css/main.min.css']|theme }}\" rel=\"stylesheet\">
        {% styles %}

    </head>

    <body>

        <div class=\"site-wrapper\">

            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'all-pages/header' %}
            </header>

            <!-- Content -->
            <section id=\"layout-content\">
                <div class=\"container white\">
                    <!-- {{ this.page.title }} -->
                    {% page %}
                </div><!-- container -->
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'all-pages/footer' %}
                <!-- {% partial 'all-pages/styleguide' %} -->
                <!-- {% content 'social' %} -->
            </footer>

        </div>  <!-- site-wrapper -->

    <script src=\"{{ [
        '@jquery',
        '@framework',
        '@framework.extras',
    ]|theme }}\"></script>

    <!-- vendor scripts and scripts init -->
    {% partial 'meta/scripts' %}
    {% scripts %}
    </body>
</html>", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/layouts/main-layout.htm", "");
    }
}
