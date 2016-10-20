<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4f34eb7caf6f906e5c9b51d0fa2e2d976b933c6726c432d853e3ae79e5a14322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

    <div class=\"w3-container\">
  
  <button onclick=\"document.getElementById('id01').style.display='block'\" class=\"w3-btn w3-green w3-large\">Login</button>

  <div id=\"id01\" class=\"w3-modal\">
    <div class=\"w3-modal-content w3-card-8 w3-animate-zoom\" style=\"max-width:600px\">

      <div class=\"w3-center\"><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright\" title=\"Close Modal\">&times;</span>
      
      </div>

      <form class=\"w3-container\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <div class=\"w3-section\">
            <label for=\"username\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          
          <input class=\"w3-input w3-border w3-margin-bottom\" type=\"text\" placeholder=\"Enter Username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required>
          <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          <input class=\"w3-input w3-border\" type=\"password\" placeholder=\"Enter Password\" name=\"_password\" required>
          <button class=\"w3-btn-block w3-green w3-section w3-padding\" type=\"submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Login</button>
          <input class=\"w3-check w3-margin-top\" type=\"checkbox\" checked=\"checked\" name=\"_remember_me\" value=\"on\"> Remember me
        </div>
      </form>

      

    </div>
  </div>
</div>
         
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  69 => 28,  65 => 27,  60 => 25,  55 => 23,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


    <div class=\"w3-container\">
  
  <button onclick=\"document.getElementById('id01').style.display='block'\" class=\"w3-btn w3-green w3-large\">Login</button>

  <div id=\"id01\" class=\"w3-modal\">
    <div class=\"w3-modal-content w3-card-8 w3-animate-zoom\" style=\"max-width:600px\">

      <div class=\"w3-center\"><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class=\"w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright\" title=\"Close Modal\">&times;</span>
      
      </div>

      <form class=\"w3-container\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <div class=\"w3-section\">
            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
          
          <input class=\"w3-input w3-border w3-margin-bottom\" type=\"text\" placeholder=\"Enter Username\" name=\"_username\" value=\"{{ last_username }}\" required>
          <label for=\"password\">{{ 'security.login.password'|trans }}</label>
          <input class=\"w3-input w3-border\" type=\"password\" placeholder=\"Enter Password\" name=\"_password\" required>
          <button class=\"w3-btn-block w3-green w3-section w3-padding\" type=\"submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">Login</button>
          <input class=\"w3-check w3-margin-top\" type=\"checkbox\" checked=\"checked\" name=\"_remember_me\" value=\"on\"> Remember me
        </div>
      </form>

      

    </div>
  </div>
</div>
         
{% endblock fos_user_content %}
";
    }
}
