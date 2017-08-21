<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/suni-csoport.htm */
class __TwigTemplate_72f9386724ab89d84559b251ee1c5d63cc6e7aad5fdfeb078476f0d7aad7a691 extends Twig_Template
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
        <!-- <h1 class=\"page-title center\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1> -->
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

    <div class=\"img-cont\">
        <img class=\"csop-image\" src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/csoportok/suni-foto.png");
        echo "\">
    </div>

    <h1 class=\"page-title center\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>


    <ul class=\"csoport-content\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 22
            echo "            <li>
                ";
            // line 23
            if (($this->getAttribute($context["team"], "id", array()) == 1)) {
                // line 24
                echo "                  
                    <p class=\"bold\">
                        Pedagógusok:<br>
                        <span>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "pedagogus_1", array()), "html", null, true);
                echo "<br>
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "pedagogus_2", array()), "html", null, true);
                echo "</span>         
                    </p>      

                    <p class=\"bold\">
                        Dajka:<br>
                        <span>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "dajka", array()), "html", null, true);
                echo "</span>         
                    </p> 

                    <p class=\"bold\">
                        Pedagógiai asszisztens:<br>
                        <span>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "ped_asszisztens", array()), "html", null, true);
                echo "</span>         
                    </p> 

                    <!--  HETI REND -->
                    <h2 class=\"heti-title\">Heti rend</h2>
                    <div class=\"hetirend-wrapper\">
                        <p class=\"nap\">Hétfő</p>                                                
                            <ul>
                                ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "hetfo", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["monday"]) {
                    // line 47
                    echo "                                    <li>
                                        <p>";
                    // line 48
                    echo twig_escape_filter($this->env, $context["monday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                            </ul>                        
                        <p class=\"nap\">Kedd</p>
                             <ul>
                                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "kedd", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tuesday"]) {
                    // line 55
                    echo "                                    <li>
                                        <p>";
                    // line 56
                    echo twig_escape_filter($this->env, $context["tuesday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuesday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                            </ul>
                        <p class=\"nap\">Szerda</p>
                             <ul>
                                ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "szerda", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["wednesday"]) {
                    // line 63
                    echo "                                    <li>
                                        <p>";
                    // line 64
                    echo twig_escape_filter($this->env, $context["wednesday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wednesday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                            </ul>
                        <p class=\"nap\">Csütörtök</p>
                             <ul>
                                ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "csutortok", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["thursday"]) {
                    // line 71
                    echo "                                    <li>
                                        <p>";
                    // line 72
                    echo twig_escape_filter($this->env, $context["thursday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thursday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                            </ul>
                        <p class=\"nap\">Péntek</p>
                            <ul class=\"border-bottom-none\">
                                ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "pentek", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["friday"]) {
                    // line 79
                    echo "                                    <li>
                                        <p>";
                    // line 80
                    echo twig_escape_filter($this->env, $context["friday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                            </ul>
                    </div>
                    <!--  HETI REND -->
                    <p class=\"csop-desc\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "description", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 88
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    </ul>




    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4 margin-top30\">
        ";
        // line 99
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 100
        echo "    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/suni-csoport.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 100,  223 => 99,  212 => 90,  205 => 88,  200 => 86,  195 => 83,  186 => 80,  183 => 79,  179 => 78,  174 => 75,  165 => 72,  162 => 71,  158 => 70,  153 => 67,  144 => 64,  141 => 63,  137 => 62,  132 => 59,  123 => 56,  120 => 55,  116 => 54,  111 => 51,  102 => 48,  99 => 47,  95 => 46,  84 => 38,  76 => 33,  68 => 28,  64 => 27,  59 => 24,  57 => 23,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  24 => 4,  19 => 1,);
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
        <!-- <h1 class=\"page-title center\">{{ this.page.title }}</h1> -->
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

    <div class=\"img-cont\">
        <img class=\"csop-image\" src=\"{{ 'assets/images/csoportok/suni-foto.png'|theme }}\">
    </div>

    <h1 class=\"page-title center\">{{ this.page.title }}</h1>


    <ul class=\"csoport-content\">
        {% for team in teams %}
            <li>
                {% if team.id == 1 %}
                  
                    <p class=\"bold\">
                        Pedagógusok:<br>
                        <span>{{ team.pedagogus_1 }}<br>
                        {{ team.pedagogus_2 }}</span>         
                    </p>      

                    <p class=\"bold\">
                        Dajka:<br>
                        <span>{{ team.dajka }}</span>         
                    </p> 

                    <p class=\"bold\">
                        Pedagógiai asszisztens:<br>
                        <span>{{ team.ped_asszisztens }}</span>         
                    </p> 

                    <!--  HETI REND -->
                    <h2 class=\"heti-title\">Heti rend</h2>
                    <div class=\"hetirend-wrapper\">
                        <p class=\"nap\">Hétfő</p>                                                
                            <ul>
                                {% for monday in team.hetfo %}
                                    <li>
                                        <p>{{ monday }}</p>  
                                    </li>
                                {% endfor %}
                            </ul>                        
                        <p class=\"nap\">Kedd</p>
                             <ul>
                                {% for tuesday in team.kedd %}
                                    <li>
                                        <p>{{ tuesday }}</p>  
                                    </li>
                                {% endfor %}
                            </ul>
                        <p class=\"nap\">Szerda</p>
                             <ul>
                                {% for wednesday in team.szerda %}
                                    <li>
                                        <p>{{ wednesday }}</p>  
                                    </li>
                                {% endfor %}
                            </ul>
                        <p class=\"nap\">Csütörtök</p>
                             <ul>
                                {% for thursday in team.csutortok %}
                                    <li>
                                        <p>{{ thursday }}</p>  
                                    </li>
                                {% endfor %}
                            </ul>
                        <p class=\"nap\">Péntek</p>
                            <ul class=\"border-bottom-none\">
                                {% for friday in team.pentek %}
                                    <li>
                                        <p>{{ friday }}</p>  
                                    </li>
                                {% endfor %}
                            </ul>
                    </div>
                    <!--  HETI REND -->
                    <p class=\"csop-desc\">{{ team.description }}</p>
                {% endif %}
            </li>
        {% endfor %}
    </ul>




    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4 margin-top30\">
        {% partial 'sidebar' %}
    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/suni-csoport.htm", "");
    }
}
