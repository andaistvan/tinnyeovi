<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/hirek/kezdolap.htm */
class __TwigTemplate_e6fbfc62967fc5004531d9a30e8ad1b6222221abbfee6346b0da0dd3efab5268 extends Twig_Template
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
        echo "<!-- HERO SECTION -->
<section id=\"hero-section\">
    <div class=\"row row-bottom-zero-margin\">
        <div class=\"col s12\">
            <div class=\"hero-cont\">
                <img src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/hero-image/hero-temp-img.jpg");
        echo "\" alt=\"Tengerszem Óvóda fotó\">
            </div>
        </div>
    </div>
</section>

<!-- PAGE TITLE -->
<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <h1 class=\"page-title\">Friss Hírek</h1>
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">
\t\t";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogNews::News"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4\">
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/hirek/kezdolap.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  56 => 28,  50 => 24,  46 => 23,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- HERO SECTION -->
<section id=\"hero-section\">
    <div class=\"row row-bottom-zero-margin\">
        <div class=\"col s12\">
            <div class=\"hero-cont\">
                <img src=\"{{ 'assets/images/hero-image/hero-temp-img.jpg'|theme }}\" alt=\"Tengerszem Óvóda fotó\">
            </div>
        </div>
    </div>
</section>

<!-- PAGE TITLE -->
<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <h1 class=\"page-title\">Friss Hírek</h1>
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">
\t\t{% component 'blogNews::News' %}
    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4\">
        {% partial 'sidebar' %}
    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/hirek/kezdolap.htm", "");
    }
}
