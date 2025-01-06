export interface GuideSectionSubItem {
  id: string;
  label: string;
  url?: string;
}

export interface GuideSectionItem {
  id: string;
  url?: string;
  title?: string;
  label?: string;
  items?: GuideSectionSubItem[];
}
