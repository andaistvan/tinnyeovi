<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/kapcsolat.htm */
class __TwigTemplate_fd0d0d6e98a08b6198a57ef470be3b9e7350a5b2ee33b1ce07fea0fa5ae4c97d extends Twig_Template
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
        echo "<!-- PAGE TITLE -->
<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <h1 class=\"page-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

        <!-- ADDRESS BLOCK -->
        <ul class=\"address-block\">
            <li>
                <i class=\"material-icons\">location_on</i>
                <p>2086, Tinnye, Petőfi Sándor u.2.</p>
            </li>
            <li>
                <i class=\"material-icons\">phone_in_talk</i>
                <p>+36 26 355 064</p>
            </li>
            <li>
                <i class=\"material-icons\">phone_in_talk</i>
                <p>+36 70 458 2466</p>
            </li>
            <li>
                <i class=\"material-icons\">email</i>
                <p><a href=\"mailto:ovoda@tinnye.hu\">ovoda@tinnye.hu</a></p>
            </li>
        </ul><!-- address-block -->
        <!-- ADDRESS BLOCK -->

        <!-- GOOGLE MAP -->
        <div class=\"map-cont\">
            <img src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/map-temp.png");
        echo "\" alt=\"\">
        </div>
        <!-- GOOGLE MAP -->

        <!-- FORM -->
        <div class=\"form-info\">
            <p>
                Ha kérdése van óvódánkkal kapcsolatban, keressen nyugodtan elérhetőségeinken, vagy hagyjon üzenetet az alábbi űrlap segítségével:
            </p>
        </div><!-- form-info -->


        ";
        // line 48
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 49
        echo "
        <!-- FORM -->

    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4\">
        ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/kapcsolat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 57,  87 => 56,  78 => 49,  74 => 48,  59 => 36,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- PAGE TITLE -->
<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <h1 class=\"page-title\">{{this.page.title}}</h1>
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

        <!-- ADDRESS BLOCK -->
        <ul class=\"address-block\">
            <li>
                <i class=\"material-icons\">location_on</i>
                <p>2086, Tinnye, Petőfi Sándor u.2.</p>
            </li>
            <li>
                <i class=\"material-icons\">phone_in_talk</i>
                <p>+36 26 355 064</p>
            </li>
            <li>
                <i class=\"material-icons\">phone_in_talk</i>
                <p>+36 70 458 2466</p>
            </li>
            <li>
                <i class=\"material-icons\">email</i>
                <p><a href=\"mailto:ovoda@tinnye.hu\">ovoda@tinnye.hu</a></p>
            </li>
        </ul><!-- address-block -->
        <!-- ADDRESS BLOCK -->

        <!-- GOOGLE MAP -->
        <div class=\"map-cont\">
            <img src=\"{{ 'assets/images/map-temp.png'|theme }}\" alt=\"\">
        </div>
        <!-- GOOGLE MAP -->

        <!-- FORM -->
        <div class=\"form-info\">
            <p>
                Ha kérdése van óvódánkkal kapcsolatban, keressen nyugodtan elérhetőségeinken, vagy hagyjon üzenetet az alábbi űrlap segítségével:
            </p>
        </div><!-- form-info -->


        {% component 'contactForm' %}

        <!-- FORM -->

    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4\">
        {% partial 'sidebar' %}
    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/kapcsolat.htm", "");
    }
}
