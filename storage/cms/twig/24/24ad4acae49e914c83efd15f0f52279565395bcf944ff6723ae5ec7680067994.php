<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/ozike-csoport.htm */
class __TwigTemplate_ceb9ad9106e7037ce7816e1fd98f9b0e4454aa04603b31e5e7a93ebbd4fed52d extends Twig_Template
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
        <!-- <img class=\"csop-image\" src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/csoportok/suni-foto.png");
        echo "\"> -->
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : null), "csoport_foto", array()), "path", array()), "html", null, true);
        echo "\">
    </div>

    <h1 class=\"page-title center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>


    <ul class=\"csoport-content\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 23
            echo "            <li>
                ";
            // line 24
            if (($this->getAttribute($context["team"], "id", array()) == 2)) {
                // line 25
                echo "                  
                    <p class=\"bold\">
                        Pedagógusok:<br>
                        <span>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "pedagogus_1", array()), "html", null, true);
                echo "<br>
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "pedagogus_2", array()), "html", null, true);
                echo "</span>         
                    </p>      

                    <p class=\"bold\">
                        Dajka:<br>
                        <span>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "dajka", array()), "html", null, true);
                echo "</span>         
                    </p> 

                    <p class=\"bold\">
                        Pedagógiai asszisztens:<br>
                        <span>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "ped_asszisztens", array()), "html", null, true);
                echo "</span>         
                    </p> 

                    <!--  HETI REND -->
                    <h2 class=\"heti-title\">Heti rend</h2>
                    <div class=\"hetirend-wrapper\">
                        <p class=\"nap\">Hétfő</p>                                                
                            <ul>
                                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "hetfo", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["monday"]) {
                    // line 48
                    echo "                                    <li>
                                        <p>";
                    // line 49
                    echo twig_escape_filter($this->env, $context["monday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                            </ul>                        
                        <p class=\"nap\">Kedd</p>
                             <ul>
                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "kedd", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tuesday"]) {
                    // line 56
                    echo "                                    <li>
                                        <p>";
                    // line 57
                    echo twig_escape_filter($this->env, $context["tuesday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuesday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                            </ul>
                        <p class=\"nap\">Szerda</p>
                             <ul>
                                ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "szerda", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["wednesday"]) {
                    // line 64
                    echo "                                    <li>
                                        <p>";
                    // line 65
                    echo twig_escape_filter($this->env, $context["wednesday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wednesday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                            </ul>
                        <p class=\"nap\">Csütörtök</p>
                             <ul>
                                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "csutortok", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["thursday"]) {
                    // line 72
                    echo "                                    <li>
                                        <p>";
                    // line 73
                    echo twig_escape_filter($this->env, $context["thursday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thursday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                            </ul>
                        <p class=\"nap\">Péntek</p>
                            <ul class=\"border-bottom-none\">
                                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["team"], "pentek", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["friday"]) {
                    // line 80
                    echo "                                    <li>
                                        <p>";
                    // line 81
                    echo twig_escape_filter($this->env, $context["friday"], "html", null, true);
                    echo "</p>  
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friday'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                            </ul>
                    </div>
                    <!--  HETI REND -->
                    <p class=\"csop-desc\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "description", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 89
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </ul>




    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4 margin-top30\">
        ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/ozike-csoport.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 101,  227 => 100,  216 => 91,  209 => 89,  204 => 87,  199 => 84,  190 => 81,  187 => 80,  183 => 79,  178 => 76,  169 => 73,  166 => 72,  162 => 71,  157 => 68,  148 => 65,  145 => 64,  141 => 63,  136 => 60,  127 => 57,  124 => 56,  120 => 55,  115 => 52,  106 => 49,  103 => 48,  99 => 47,  88 => 39,  80 => 34,  72 => 29,  68 => 28,  63 => 25,  61 => 24,  58 => 23,  54 => 22,  47 => 18,  41 => 15,  37 => 14,  24 => 4,  19 => 1,);
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
        <!-- <img class=\"csop-image\" src=\"{{ 'assets/images/csoportok/suni-foto.png'|theme }}\"> -->
        <img src=\"{{ team.csoport_foto.path }}\">
    </div>

    <h1 class=\"page-title center\">{{ this.page.title }}</h1>


    <ul class=\"csoport-content\">
        {% for team in teams %}
            <li>
                {% if team.id == 2 %}
                  
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

<!-- CONTENT -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/csoportok/ozike-csoport.htm", "");
    }
}
