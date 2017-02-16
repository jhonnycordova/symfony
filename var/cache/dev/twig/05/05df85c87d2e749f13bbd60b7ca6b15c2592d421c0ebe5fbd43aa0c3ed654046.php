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
        $__internal_a25d15fb1d9ba8adff5912ce42a2041588f399d25de7606dbdb435bda9e4be7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25d15fb1d9ba8adff5912ce42a2041588f399d25de7606dbdb435bda9e4be7c->enter($__internal_a25d15fb1d9ba8adff5912ce42a2041588f399d25de7606dbdb435bda9e4be7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $__internal_ec4f377cf0698a566ba9e527e47862ceec1c529696de0509c77dc843c55cfcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4f377cf0698a566ba9e527e47862ceec1c529696de0509c77dc843c55cfcb9->enter($__internal_ec4f377cf0698a566ba9e527e47862ceec1c529696de0509c77dc843c55cfcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25d15fb1d9ba8adff5912ce42a2041588f399d25de7606dbdb435bda9e4be7c->leave($__internal_a25d15fb1d9ba8adff5912ce42a2041588f399d25de7606dbdb435bda9e4be7c_prof);

        
        $__internal_ec4f377cf0698a566ba9e527e47862ceec1c529696de0509c77dc843c55cfcb9->leave($__internal_ec4f377cf0698a566ba9e527e47862ceec1c529696de0509c77dc843c55cfcb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_109840dcb0ee1fef51d7d027f2608d43120d59ee91d88be831328e7e96733a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109840dcb0ee1fef51d7d027f2608d43120d59ee91d88be831328e7e96733a0c->enter($__internal_109840dcb0ee1fef51d7d027f2608d43120d59ee91d88be831328e7e96733a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f628d0fc8355b6dd934610c7ac5c437f9b192c3cd59b9e1fb8ec4eed98a09584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f628d0fc8355b6dd934610c7ac5c437f9b192c3cd59b9e1fb8ec4eed98a09584->enter($__internal_f628d0fc8355b6dd934610c7ac5c437f9b192c3cd59b9e1fb8ec4eed98a09584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_f628d0fc8355b6dd934610c7ac5c437f9b192c3cd59b9e1fb8ec4eed98a09584->leave($__internal_f628d0fc8355b6dd934610c7ac5c437f9b192c3cd59b9e1fb8ec4eed98a09584_prof);

        
        $__internal_109840dcb0ee1fef51d7d027f2608d43120d59ee91d88be831328e7e96733a0c->leave($__internal_109840dcb0ee1fef51d7d027f2608d43120d59ee91d88be831328e7e96733a0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4be4bbc1e465c0057715cf61021e4f0c105d73cba937e73079eac14cc9294ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4be4bbc1e465c0057715cf61021e4f0c105d73cba937e73079eac14cc9294ea->enter($__internal_a4be4bbc1e465c0057715cf61021e4f0c105d73cba937e73079eac14cc9294ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bfd2a5bb3531141df3fe9cd229c976577b8a48c1781f14f73ea84cb86083f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfd2a5bb3531141df3fe9cd229c976577b8a48c1781f14f73ea84cb86083f86->enter($__internal_9bfd2a5bb3531141df3fe9cd229c976577b8a48c1781f14f73ea84cb86083f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, "99999"), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo (isset($context["funFact"]) ? $context["funFact"] : $this->getContext($context, "funFact"));
        echo "</dd>
            </dl>
        </div>
    </div>


     <div id=\"js-notes-wrapper\"></div>

";
        
        $__internal_9bfd2a5bb3531141df3fe9cd229c976577b8a48c1781f14f73ea84cb86083f86->leave($__internal_9bfd2a5bb3531141df3fe9cd229c976577b8a48c1781f14f73ea84cb86083f86_prof);

        
        $__internal_a4be4bbc1e465c0057715cf61021e4f0c105d73cba937e73079eac14cc9294ea->leave($__internal_a4be4bbc1e465c0057715cf61021e4f0c105d73cba937e73079eac14cc9294ea_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f2e31fcc92d221fd0fd7d2a61f29e7123ecf4270ece6f894d932792f2791a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2e31fcc92d221fd0fd7d2a61f29e7123ecf4270ece6f894d932792f2791a84->enter($__internal_2f2e31fcc92d221fd0fd7d2a61f29e7123ecf4270ece6f894d932792f2791a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d558815b539aaf9bc30b4ce705859730d2bbfe0eb406800447c9eafc7309ca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d558815b539aaf9bc30b4ce705859730d2bbfe0eb406800447c9eafc7309ca94->enter($__internal_d558815b539aaf9bc30b4ce705859730d2bbfe0eb406800447c9eafc7309ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d558815b539aaf9bc30b4ce705859730d2bbfe0eb406800447c9eafc7309ca94->leave($__internal_d558815b539aaf9bc30b4ce705859730d2bbfe0eb406800447c9eafc7309ca94_prof);

        
        $__internal_2f2e31fcc92d221fd0fd7d2a61f29e7123ecf4270ece6f894d932792f2791a84->leave($__internal_2f2e31fcc92d221fd0fd7d2a61f29e7123ecf4270ece6f894d932792f2791a84_prof);

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
        return array (  130 => 35,  124 => 32,  116 => 28,  107 => 27,  88 => 17,  83 => 15,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
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
                <dd>{{ '99999'|number_format }}</dd>
                <dt>Fun Fact:</dt>
                <dd>{{ funFact|raw }}</dd>
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
