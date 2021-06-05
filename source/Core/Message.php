<?php


namespace Source\Core;


class Message
{
    private  $text;
    private $type;


    public function  __toString()
    {
        return $this->render();
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function info(string $message): Message
    {
        $this->type = CONF_MESSAGE_INFO;
        $this->text = $this->filter($message);
        return $this;
    }

    public function sucess(string $message): Message
    {
        $this->type = CONF_MESSAGE_SUCCESS;
        $this->text = $this->filter($message);
        return  $this;
    }

    public function warning(string $message): Message
    {
        $this->type = CONF_MESSAGE_ERROR;
        $this->text = $this->filter($message);
        return  $this;
    }

    public function render(): string
    {
        return "<div class='" . CONF_MESSAGE_CLASS . " {$this->getType()}'>{$this->getText()}<div>";
    }

    public function json(): string
    {
        return  json_encode(["error" => $this->getText()]);
    }

    private function filter(string $message): string
    {
        return filter_var($message, FILTER_SANITIZE_STRIPPED);
    }

}