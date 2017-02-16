<?php

/* genus/show.html.twig */
class __TwigTemplate_b8acefa98f341e0e26a253452006982834e7168ebd6af84c316fc11eb41276f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a50b4e1023d325b836846df6447cc33b6a73fa4a95f1b31726b1f17e6c0836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a50b4e1023d325b836846df6447cc33b6a73fa4a95f1b31726b1f17e6c0836->enter($__internal_09a50b4e1023d325b836846df6447cc33b6a73fa4a95f1b31726b1f17e6c0836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $__internal_3f379661b0c12815695ae0f273cba282251b0d7a292c46f810803a801b8c347e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f379661b0c12815695ae0f273cba282251b0d7a292c46f810803a801b8c347e->enter($__internal_3f379661b0c12815695ae0f273cba282251b0d7a292c46f810803a801b8c347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a50b4e1023d325b836846df6447cc33b6a73fa4a95f1b31726b1f17e6c0836->leave($__internal_09a50b4e1023d325b836846df6447cc33b6a73fa4a95f1b31726b1f17e6c0836_prof);

        
        $__internal_3f379661b0c12815695ae0f273cba282251b0d7a292c46f810803a801b8c347e->leave($__internal_3f379661b0c12815695ae0f273cba282251b0d7a292c46f810803a801b8c347e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeecf8120f18cb6f7c30ea93485a8560185808fa557cd33d143cc068059e0bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeecf8120f18cb6f7c30ea93485a8560185808fa557cd33d143cc068059e0bf9->enter($__internal_aeecf8120f18cb6f7c30ea93485a8560185808fa557cd33d143cc068059e0bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7f688934be30fede1bc0e6a28af09a9db9911e0fafb206ebdc49c96ca8abad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f688934be30fede1bc0e6a28af09a9db9911e0fafb206ebdc49c96ca8abad7->enter($__internal_f7f688934be30fede1bc0e6a28af09a9db9911e0fafb206ebdc49c96ca8abad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_f7f688934be30fede1bc0e6a28af09a9db9911e0fafb206ebdc49c96ca8abad7->leave($__internal_f7f688934be30fede1bc0e6a28af09a9db9911e0fafb206ebdc49c96ca8abad7_prof);

        
        $__internal_aeecf8120f18cb6f7c30ea93485a8560185808fa557cd33d143cc068059e0bf9->leave($__internal_aeecf8120f18cb6f7c30ea93485a8560185808fa557cd33d143cc068059e0bf9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43389672f0ab588e8d735da3181710062ad7ae49d65234479e5b1a1dad6aab14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43389672f0ab588e8d735da3181710062ad7ae49d65234479e5b1a1dad6aab14->enter($__internal_43389672f0ab588e8d735da3181710062ad7ae49d65234479e5b1a1dad6aab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6da208bb4aa6d74bf5ec84e1fc92cd535793850cf66dff2bcc6ed48eaf927420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da208bb4aa6d74bf5ec84e1fc92cd535793850cf66dff2bcc6ed48eaf927420->enter($__internal_6da208bb4aa6d74bf5ec84e1fc92cd535793850cf66dff2bcc6ed48eaf927420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>
  
    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>Octopodinae</dd>
                <dt>Known Species:</dt>
                <dd>289</dd>
                <dt>Fun Fact:</dt>
                <dd>Octopuses can change the color of their body in just three-tenths of a second!</dd>
            </dl>
        </div>
    </div>


     <div id=\"js-notes-wrapper\"></div>

";
        
        $__internal_6da208bb4aa6d74bf5ec84e1fc92cd535793850cf66dff2bcc6ed48eaf927420->leave($__internal_6da208bb4aa6d74bf5ec84e1fc92cd535793850cf66dff2bcc6ed48eaf927420_prof);

        
        $__internal_43389672f0ab588e8d735da3181710062ad7ae49d65234479e5b1a1dad6aab14->leave($__internal_43389672f0ab588e8d735da3181710062ad7ae49d65234479e5b1a1dad6aab14_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a971e1dfd140ee6857c06b2739052b245bf1d45447ec0c5981b9e18bf5dd442e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a971e1dfd140ee6857c06b2739052b245bf1d45447ec0c5981b9e18bf5dd442e->enter($__internal_a971e1dfd140ee6857c06b2739052b245bf1d45447ec0c5981b9e18bf5dd442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c3c2958c152fb552e657949f82188826cbf3b119e1ed331c37d9b79b4ff44fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3c2958c152fb552e657949f82188826cbf3b119e1ed331c37d9b79b4ff44fa->enter($__internal_4c3c2958c152fb552e657949f82188826cbf3b119e1ed331c37d9b79b4ff44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
    <script type=\"text/babel\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/babel\">
    \tvar notesUrl = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_show_notes", array("genusName" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "';

        ReactDOM.render(
        \t<NoteSection url={notesUrl} />,
            document.getElementById('js-notes-wrapper')
        );
    </script> 
";
        
        $__internal_4c3c2958c152fb552e657949f82188826cbf3b119e1ed331c37d9b79b4ff44fa->leave($__internal_4c3c2958c152fb552e657949f82188826cbf3b119e1ed331c37d9b79b4ff44fa_prof);

        
        $__internal_a971e1dfd140ee6857c06b2739052b245bf1d45447ec0c5981b9e18bf5dd442e->leave($__internal_a971e1dfd140ee6857c06b2739052b245bf1d45447ec0c5981b9e18bf5dd442e_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  118 => 32,  110 => 28,  101 => 27,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Genus {{ name }}{% endblock %}

{% block body %}
    <h2 class=\"genus-name\">{{ name }}</h2>
  
    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>Octopodinae</dd>
                <dt>Known Species:</dt>
                <dd>289</dd>
                <dt>Fun Fact:</dt>
                <dd>Octopuses can change the color of their body in just three-tenths of a second!</dd>
            </dl>
        </div>
    </div>


     <div id=\"js-notes-wrapper\"></div>

{% endblock %}

{% block javascripts %}
\t{{ parent() }}  
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>
    <script type=\"text/babel\" src=\"{{ asset('js/notes.react.js') }}\"></script>

    <script type=\"text/babel\">
    \tvar notesUrl = '{{ path('genus_show_notes', {'genusName': name}) }}';

        ReactDOM.render(
        \t<NoteSection url={notesUrl} />,
            document.getElementById('js-notes-wrapper')
        );
    </script> 
{% endblock %}
", "genus/show.html.twig", "/var/www/html/aqua_note/app/Resources/views/genus/show.html.twig");
    }
}
