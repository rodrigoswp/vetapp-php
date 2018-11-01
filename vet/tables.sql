-- Table: public.login

-- DROP TABLE public.login;

CREATE TABLE public.login
(
  id integer NOT NULL DEFAULT nextval('login_id_seq'::regclass),
  tipo "char",
  email text,
  senha text,
  nome text,
  celphone character varying,
  updated_at timestamp without time zone,
  created_at timestamp without time zone,
  CONSTRAINT id PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.login
  OWNER TO postgres;

  
  
  -- Table: public.veterinario

-- DROP TABLE public.veterinario;

CREATE TABLE public.veterinario
(
  id integer NOT NULL DEFAULT nextval('vet_id_seq'::regclass),
  id_login integer NOT NULL,
  crmv character varying,
  data_nascimento character varying,
  tipo_documento character varying,
  num_cpf text,
  cep_residencial character varying,
  endereco text,
  endereco_num character varying,
  endereco_comp character varying,
  city character varying,
  faculdade character varying,
  faculdade_mes character(1),
  faculdade_ano character(1),
  esp_faculdade character(1),
  certificado_esp character(1),
  crmv_file character(1),
  habilitacao_file character(1),
  residencia_file character(1),
  selfie_file character(1),
  vet_banco character(1),
  vet_agencia character(1),
  vet_conta character(1),
  vet_digito character(1),
  vet_tipo_conta character(1),
  servico_consulta character(1),
  servico_24horas character(1),
  servico_vacina character(1),
  servico_exame character(1),
  apresentacao text,
  curriculo text,
  vet_video character(1),
  updated_at timestamp without time zone,
  created_at timestamp without time zone
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.veterinario
  OWNER TO postgres;
  