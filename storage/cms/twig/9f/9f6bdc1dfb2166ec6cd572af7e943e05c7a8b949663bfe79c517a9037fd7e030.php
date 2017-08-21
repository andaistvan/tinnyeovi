<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/meta/scripts.htm */
class __TwigTemplate_55c6ed81d2badf32fd770fd66a7833b01c944d93f1b332b8fe556d0148bf9edf extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/materialize/js/bin/materialize.min.js", 1 => "assets/vendor/wow/dist/wow.min.js", 2 => "assets/vendor/isotope/isotope.pkgd.min.js", 3 => "assets/js/theme-init.js"));
        // line 6
        echo "\"></script>

<!-- 'assets/vendor/bootstrap-ui/bootstrap.js', -->

<!-- 'assets/vendor/bootstrap-ui/bootstrap-alert.js', -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/meta/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    'assets/vendor/materialize/js/bin/materialize.min.js',
    'assets/vendor/wow/dist/wow.min.js',
    'assets/vendor/isotope/isotope.pkgd.min.js',
    'assets/js/theme-init.js'
]|theme }}\"></script>

<!-- 'assets/vendor/bootstrap-ui/bootstrap.js', -->

<!-- 'assets/vendor/bootstrap-ui/bootstrap-alert.js', -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/meta/scripts.htm", "");
    }
}
