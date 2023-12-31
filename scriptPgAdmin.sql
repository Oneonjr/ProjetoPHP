PGDMP                      {            teste01    16.0    16.0     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24576    teste01    DATABASE     ~   CREATE DATABASE teste01 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE teste01;
                postgres    false            �            1255    24594    adicionar_curso()    FUNCTION     �  CREATE FUNCTION public.adicionar_curso() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
BEGIN
    -- Verifique se o curso já existe na tabela "cursos"
    IF NOT EXISTS (SELECT 1 FROM cursos WHERE nome_curso = NEW.curso_desejado) THEN
        -- Se o curso não existe, insira-o na tabela "cursos"
        INSERT INTO cursos (nome_curso) VALUES (NEW.curso_desejado);
    END IF;
    RETURN NEW;
END;
$$;
 (   DROP FUNCTION public.adicionar_curso();
       public          postgres    false            �            1259    24578    alunos    TABLE     ?  CREATE TABLE public.alunos (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    data_nascimento date,
    cpf numeric(11,0),
    telefone numeric(11,0),
    whatsapp numeric(11,0),
    curso_desejado character varying(255),
    data_cadastro timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.alunos;
       public         heap    postgres    false            �            1259    24577    alunos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.alunos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.alunos_id_seq;
       public          postgres    false    216            �           0    0    alunos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.alunos_id_seq OWNED BY public.alunos.id;
          public          postgres    false    215            �            1259    24588    cursos    TABLE     h   CREATE TABLE public.cursos (
    id integer NOT NULL,
    nome_curso character varying(255) NOT NULL
);
    DROP TABLE public.cursos;
       public         heap    postgres    false            �            1259    24587    cursos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cursos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.cursos_id_seq;
       public          postgres    false    218            �           0    0    cursos_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.cursos_id_seq OWNED BY public.cursos.id;
          public          postgres    false    217                       2604    24581 	   alunos id    DEFAULT     f   ALTER TABLE ONLY public.alunos ALTER COLUMN id SET DEFAULT nextval('public.alunos_id_seq'::regclass);
 8   ALTER TABLE public.alunos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216                       2604    24591 	   cursos id    DEFAULT     f   ALTER TABLE ONLY public.cursos ALTER COLUMN id SET DEFAULT nextval('public.cursos_id_seq'::regclass);
 8   ALTER TABLE public.cursos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            �          0    24578    alunos 
   TABLE DATA           s   COPY public.alunos (id, nome, data_nascimento, cpf, telefone, whatsapp, curso_desejado, data_cadastro) FROM stdin;
    public          postgres    false    216   �       �          0    24588    cursos 
   TABLE DATA           0   COPY public.cursos (id, nome_curso) FROM stdin;
    public          postgres    false    218   v       �           0    0    alunos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.alunos_id_seq', 5, true);
          public          postgres    false    215            �           0    0    cursos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cursos_id_seq', 3, true);
          public          postgres    false    217                       2606    24586    alunos alunos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.alunos
    ADD CONSTRAINT alunos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.alunos DROP CONSTRAINT alunos_pkey;
       public            postgres    false    216                       2606    24593    cursos cursos_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.cursos
    ADD CONSTRAINT cursos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.cursos DROP CONSTRAINT cursos_pkey;
       public            postgres    false    218                       2620    24595    alunos trigger_adicionar_curso    TRIGGER     }   CREATE TRIGGER trigger_adicionar_curso AFTER INSERT ON public.alunos FOR EACH ROW EXECUTE FUNCTION public.adicionar_curso();
 7   DROP TRIGGER trigger_adicionar_curso ON public.alunos;
       public          postgres    false    219    216            �   x   x�u�1�0�ٜ�pć���'�Ve������2$����<�m^��	���m��_�e}�[a��5n`�ݵ�%W��#�"�QHCѣ�{������,;*�{zƿ��ͥ:
M}d�;�      �       x�3�L.-*�70�2��L���,S�=... ��	'     